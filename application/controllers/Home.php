<?php
defined('BASEPATH') OR exit('Doğrudan komut dosyasına erişime izin verilmiyor');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $settings = getSettings();

    }

    public function index()
    {
        $this->load->model("index_model");
        $slides = $this->index_model->get_all(array("isActive" => "true"));
        $sss = $this->db->limit(3)->order_by("id ASC")->get("sss")->result();
        $images = $this->db->limit(6)->order_by("id ASC")->get("images")->result();
        $resulData = array("rows" => $slides, "sss" => $sss, "images" => $images);
        $this->load->view("index_v", $resulData);
    }

    public function kurumsal()
    {
        $this->load->model("kurumsal_model");
        $data = $this->kurumsal_model->get();
        $resulData = array("data" => $data);
        $this->load->view("kurumsal_v", $resulData);
    }

    public function sss()
    {
        $this->load->model("sss_model");
        $sss = $this->sss_model->get_all();
        $resulData = array("rows" => $sss);
        $this->load->view("sss_v", $resulData);
    }

    public function galeri()
    {
        $this->load->model("galeri_model");
        $sss = $this->galeri_model->get_all();
        $resulData = array("rows" => $sss);
        $this->load->view("galeri_v", $resulData);
    }

    public function iletisim()
    {
        $this->load->model("iletisim_model");
        if ($this->input->post("submit")) {
            $rules = array(
                array(
                    'field' => 'fullName',
                    'label' => 'Ad ve Soyad',
                    'rules' => 'min_length[6]|trim|required'
                ),
                array(
                    'field' => 'email',
                    'label' => 'E-mail',
                    'rules' => 'required|valid_email|min_length[6]',
                ),
                array(
                    'field' => 'phone',
                    'label' => 'Telefon Numarası',
                    'rules' => 'min_length[6]|trim|required|numeric'
                ),
                array(
                    'field' => 'title',
                    'label' => 'Başlık',
                    'rules' => 'min_length[6]|trim|required'
                ),
                array(
                    'field' => 'content',
                    'label' => 'Mesaj',
                    'rules' => 'min_length[10]|trim|required'
                ),


            );

            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run()) {
                $data = array(
                    "title" => htmlspecialchars($this->input->post("title")),
                    "content" => htmlspecialchars($this->input->post("content")),
                    "phone" => $this->input->post("phone"),
                    "email" => $this->input->post("email"),
                    "fullName" => $this->input->post("fullName"),
                    "date" => date("Y-m-d H:i:s")
                );
                if ($this->iletisim_model->add($data)) {
                    $session = array(
                        "type" => "success",
                        "text" => "Mesajınız gönderildi, en yakın zamanda size ulaşılacaktır.",
                    );
                    $this->session->set_flashdata($session);
                    redirect(base_url("iletisim"));
                } else {
                    $session = array(
                        "type" => "error",
                        "text" => "Mesaj Gönderilemedi.",
                    );
                    $this->session->set_flashdata($session);
                    redirect(base_url("iletisim"));
                }
            }
        }
        $this->load->view("contact_v");
    }

    public function errorPage()
    {
        $this->load->view("404");
    }

}
