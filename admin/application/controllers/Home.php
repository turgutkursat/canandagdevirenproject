<?php
defined('BASEPATH') OR exit('Doğrudan komut dosyasına erişime izin verilmiyor');

class Home extends CI_Controller
{
    public $view = "index_v";
    public function __construct()
    {
        parent::__construct();
        if ($this->session->logged_in != 1 || isset($this->session->user->rank) != 2) {
            redirect("login");
        } else
            $this->session->mark_as_temp(array('user' => 1800, "logged_in" => 1800));
    }

    public function index()
    {
        $this->load->view("$this->view/index_v");
    }

}
