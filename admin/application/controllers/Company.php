<?php
defined('BASEPATH') OR exit('Doğrudan komut dosyasına erişime izin verilmiyor');

class Company extends CI_Controller
{
    public $view = "company_v";
    public $url = "company";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("company_model");///AYARLAR VERİTABANI FUNCTION UPLOAD
        if ($this->session->logged_in != 1 || isset($this->session->user->rank) != 2) {
            redirect("login");
        } else
            $this->session->mark_as_temp(array('user' => 1800, "logged_in" => 1800));//OTURUM SÜRE SIFIRLAMA
    }

    public function index()
    {
        $companyData = $this->company_model->get();

        if (empty($companyData)) {
            //YOKSA EKLEME İŞLEMİ YAPILACAK
            if ($this->input->post("submit")) {
                $config = array(
                    array(
                        'field' => 'content',
                        'label' => 'İçerik',
                        'rules' => 'required|min_length[6]',
                    ),
                );//POST KURALLARI
                $this->form_validation->set_rules($config);//POST KURAL KONTROLU
                if ($this->form_validation->run()) {
                    $data = array(
                        "content" => $this->input->post("content") ? htmlspecialchars($this->input->post("content")) : "EntrBit Software",
                        "date" => date("Y-m-d H:i:s"),
                    );//VERİ TABANINA EKELNECEK DATA

                    if ($this->company_model->add($data)) {
                        //EKLEME BAŞARILI
                        $session = array(
                            "type" => "success",
                            "text" => "Kaydedildi.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url"));
                    } else {
                        //EKLEME OLAYINDA HATA VAR
                        $session = array(
                            "type" => "error",
                            "text" => "Bir sorun oluştu, daha sonra tekrar deneyiniz.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url"));
                    }
                }
            }
            $this->load->view("$this->view/company_v");
        } else {
            //AYARLAR VAR İSE GÜNCELLEME İŞLEMİ YAPILACAK
            if ($this->input->post("submit")) {
                $config = array(
                    array(
                        'field' => 'content',
                        'label' => 'İçerik',
                        'rules' => 'required|min_length[6]',
                    ),
                );//POST KURALLARI
                $this->form_validation->set_rules($config);//POST KURAL KONTROLU
                if ($this->form_validation->run()) {
                    $data = array(
                        "content" => $this->input->post("content") ? htmlspecialchars($this->input->post("content")) : "EntrBit Software",
                        "date" => date("Y-m-d H:i:s"),
                    );//VERİ TABANINA EKELNECEK DATA

                    if ($this->company_model->update(array("id" => $companyData->id), $data)) {
                        //EKLEME BAŞARILI
                        $session = array(
                            "type" => "success",
                            "text" => "Kaydedildi.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url"));
                    } else {
                        //EKLEME OLAYINDA HATA VAR
                        $session = array(
                            "type" => "error",
                            "text" => "Bir sorun oluştu, daha sonra tekrar deneyiniz.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("$this->url"));
                    }
                }
            }
            $resulData = array("data" => $companyData);

            $this->load->view("$this->view/company_v", $resulData);
        }
    }

}
