<?php
defined('BASEPATH') OR exit('Doğrudan komut dosyasına erişime izin verilmiyor');

class Message extends CI_Controller
{
    public $view = "message_v";
    public $url = "message";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("message_model");///VERİTABANI MODEL UPLOAD
        if ($this->session->logged_in != 1 || isset($this->session->user->rank) != 2) {
            redirect("login");
        } else
            $this->session->mark_as_temp(array('user' => 1800, "logged_in" => 1800));//OTURUM SÜRE SIFIRLAMA
    }

    public function index()
    {
        $datas = $this->message_model->get_all();
        $resulData = array("datas" => $datas);
        $this->load->view("$this->view/index_v", $resulData);
    }

    public function read()
    {
        if (!$this->uri->segment(3))
            redirect(base_url("$this->url"));
        $data = $this->message_model->get(array("id" => $this->uri->segment(3)));
        $this->message_model->update(array("id" => $this->uri->segment(3)), array("isRead" => 1));
        $resulData = array("data" => $data);
        $this->load->view("$this->view/update_v", $resulData);
    }

    public function delete()
    {
        if (!$this->uri->segment(3))
            redirect(base_url("$this->url"));
        $this->message_model->delete(array("id" => $this->uri->segment(3)));
        $session = array(
            "type" => "success",
            "text" => "Kayıt Silindi.",
        );
        $this->session->set_flashdata($session);
        redirect(base_url("$this->url"));

    }

}
