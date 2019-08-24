<?php
defined('BASEPATH') OR exit('Doğrudan komut dosyasına erişime izin verilmiyor');

class sss extends CI_Controller
{
    public $view = "sss_v";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("slides_model");///AYARLAR VERİTABANI FUNCTION UPLOAD
        if ($this->session->logged_in != 1 || isset($this->session->user->rank) != 2) {
            redirect("login");
        } else
            $this->session->mark_as_temp(array('user' => 1800, "logged_in" => 1800));//OTURUM SÜRE SIFIRLAMA
    }

    public function index()
    {
        $sss = $this->slides_model->get_all();
        $resulData = array("sss" => $sss);
        $this->load->view("$this->view/index_v", $resulData);
    }

    public function add()
    {
        $this->load->view("$this->view/add_v");
    }

    public function update()
    {
        if (!$this->uri->segment(3))
            redirect(base_url("slides"));
        $sss = $this->settings_model->get(array("id" => $this->uri->segment(3)));
        $resulData = array("sss" => $sss);
        $this->load->view("$this->view/update_v");
    }

    public function delete()
    {
        if (!$this->uri->segment(3))
            redirect(base_url("slides"));
        $this->slides_model->delete(array("id" => $this->uri->segment(3)));
        $session = array(
            "type" => "success",
            "text" => "Kayıt Silindi.",
        );
        $this->session->set_flashdata($session);
        redirect(base_url("slides"));

    }

}
