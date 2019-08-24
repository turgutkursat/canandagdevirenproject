<?php
defined('BASEPATH') OR exit('Doğrudan komut dosyasına erişime izin verilmiyor');

class Images extends CI_Controller
{
    public $view = "images_v";
    public $url = "images";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("images_model");///AYARLAR VERİTABANI FUNCTION UPLOAD
        if ($this->session->logged_in != 1 || isset($this->session->user->rank) != 2) {
            redirect("login");
        } else
            $this->session->mark_as_temp(array('user' => 1800, "logged_in" => 1800));//OTURUM SÜRE SIFIRLAMA
    }

    public function index()
    {
        $sss = $this->images_model->get_all();
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
                    'rules' => 'required|min_length[3]',
                ),
            );//POST KURALLARI
            $this->form_validation->set_rules($config);//POST KURAL KONTROLU
            if ($this->form_validation->run()) {
                $config['upload_path'] = 'assets/upload/room/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 3072;
                $config['max_width'] = 1920;
                $config['max_height'] = 1080;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('image')) {
                    $error = array('error' => $this->upload->display_errors());
                    $session = array(
                        "type" => "error",
                        "text" => $error["error"],
                    );
                    $this->session->set_flashdata($session);
                } else {

                    $dataIMG = $this->upload->data();
                    $data = array(
                        "image" => "assets/upload/room/" . $dataIMG["file_name"],
                        "title" => $this->input->post("title"),
                        "date" => date("Y-m-d H:i:s"),
                    );
                    if ($this->images_model->add($data)) {
                        $session = array(
                            "type" => "success",
                            "text" => "Resim Eklendi.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url"));
                    } else {
                        $session = array(
                            "type" => "error",
                            "text" => "Bir sorun oluştu",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url/add"));
                    }
                }
            }
        }
        $this->load->view("$this->view/add_v");
    }

    public function delete()
    {
        if (!$this->uri->segment(3))
            redirect(base_url("$this->url"));
        $dataIMg = $this->images_model->get(array("id" => $this->uri->segment(3)));
        unlink("$dataIMg->image");
        $this->images_model->delete(array("id" => $this->uri->segment(3)));
        $session = array(
            "type" => "success",
            "text" => "Kayıt Silindi.",
        );
        $this->session->set_flashdata($session);
        redirect(base_url("$this->url"));

    }

}
