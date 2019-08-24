<?php
defined('BASEPATH') OR exit('Doğrudan komut dosyasına erişime izin verilmiyor');

class sss extends CI_Controller
{
    public $view = "sss_v";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("sss_model");///AYARLAR VERİTABANI FUNCTION UPLOAD
        if ($this->session->logged_in != 1 || isset($this->session->user->rank) != 2) {
            redirect("login");
        } else
            $this->session->mark_as_temp(array('user' => 1800, "logged_in" => 1800));//OTURUM SÜRE SIFIRLAMA
    }

    public function index()
    {
        $sss = $this->sss_model->get_all();
        $resulData = array("datas" => $sss);
        $this->load->view("$this->view/index_v", $resulData);
    }

    public function add()
    {
        if ($this->input->post("submit")) {
            $config = array(
                array(
                    'field' => 'title',
                    'label' => 'Title',
                    'rules' => 'required|min_length[10]',
                ),
                array(
                    'field' => 'message',
                    'label' => 'Title',
                    'rules' => 'required|min_length[10]',
                ),
            );//POST KURALLARI
            $this->form_validation->set_rules($config);//POST KURAL KONTROLU
            if ($this->form_validation->run()) {
                $data = array(
                    "title"=>$this->input->post("title"),
                    "message"=>$this->input->post("message"),
                );
                if ($this->sss_model->add($data)) {
                    $session = array(
                        "type" => "success",
                        "text" => "S.S.S. Eklendi.",
                    );
                    $this->session->set_flashdata($session);
                    redirect(base_url("sss"));
                } else {
                    $session = array(
                        "type" => "error",
                        "text" => "S.S.S. Eklenemedi.",
                    );
                    $this->session->set_flashdata($session);
                    redirect(base_url("sss/add"));
                }
            }
        }
        $this->load->view("$this->view/add_v");
    }

    public function update()
    {
        if (!$this->uri->segment(3))
            redirect(base_url("slides"));
        $sss = $this->sss_model->get(array("id" => $this->uri->segment(3)));
        $resulData = array("sss" => $sss);
        if ($this->input->post("submit")) {
            $config = array(
                array(
                    'field' => 'title',
                    'label' => 'Title',
                    'rules' => 'required|min_length[10]',
                ),
                array(
                    'field' => 'message',
                    'label' => 'Title',
                    'rules' => 'required|min_length[10]',
                ),
            );//POST KURALLARI
            $this->form_validation->set_rules($config);//POST KURAL KONTROLU
            if ($this->form_validation->run()) {
                $data = array(
                    "title"=>$this->input->post("title"),
                    "message"=>$this->input->post("message"),
                );
                if ($this->sss_model->update(array("id"=>$this->uri->segment(3)),$data)) {
                    $session = array(
                        "type" => "success",
                        "text" => "S.S.S. Güncellendi.",
                    );
                    $this->session->set_flashdata($session);
                    redirect(base_url("sss"));
                } else {
                    $session = array(
                        "type" => "error",
                        "text" => "S.S.S. Güncelleme İşleminde Sorun Oluştu.",
                    );
                    $this->session->set_flashdata($session);
                    redirect(base_url("sss/add"));
                }
            }
        }
        $this->load->view("$this->view/update_v",$resulData);
    }

    public function delete()
    {
        if (!$this->uri->segment(3))
            redirect(base_url("sss"));
        $this->sss_model->delete(array("id" => $this->uri->segment(3)));
        $session = array(
            "type" => "success",
            "text" => "Kayıt Silindi.",
        );
        $this->session->set_flashdata($session);
        redirect(base_url("sss"));

    }

}
