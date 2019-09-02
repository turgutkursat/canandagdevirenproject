<?php
defined('BASEPATH') OR exit('Doğrudan komut dosyasına erişime izin verilmiyor');

class Settings extends CI_Controller
{
    public $view = "settings_v";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("settings_model");///AYARLAR VERİTABANI FUNCTION UPLOAD
        if ($this->session->logged_in != 1 || isset($this->session->user->rank) != 2) {
            redirect("login");
        } else
            $this->session->mark_as_temp(array('user' => 1800, "logged_in" => 1800));//OTURUM SÜRE SIFIRLAMA
    }

    public function index()
    {
        $settingsData = $this->settings_model->get();
        if (empty($settingsData)) {
            //AYARLAR YOKSA EKLEME İŞLEMİ YAPILACAK
            if ($this->input->post("submit")) {
                $config = array(
                    array(
                        'field' => 'companyName',
                        'label' => 'Şirket Adı',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'email',
                        'label' => 'E-mail',
                        'rules' => 'required|valid_email|min_length[6]',
                    ),
                    array(
                        'field' => 'copyright',
                        'label' => 'Copyright',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'phone',
                        'label' => 'Telefon Numarası',
                        'rules' => 'required',
                    ),
                    array(
                        'field' => 'description',
                        'label' => 'Description',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'keywords',
                        'label' => 'Keywords',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'whatsapp',
                        'label' => 'Whatsapp',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'about',
                        'label' => 'Hakkımızda',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'adress',
                        'label' => 'Adres',
                        'rules' => 'required|min_length[6]',
                    ),

                );//POST KURALLARI
                $this->form_validation->set_rules($config);//POST KURAL KONTROLU
                if ($this->form_validation->run()) {
                    $data = array(
                        "companyName" => $this->input->post("companyName") ? $this->input->post("companyName") : null,
                        "author" => $this->input->post("author") ? $this->input->post("author") : null,
                        "copyright" => $this->input->post("copyright") ? $this->input->post("copyright") : null,
                        "keywords" => $this->input->post("keywords") ? $this->input->post("keywords") : null,
                        "description" => $this->input->post("description") ? $this->input->post("description") : null,
                        "phone" => $this->input->post("phone") ? $this->input->post("phone") : "500 000 00 00",
                        "adress" => $this->input->post("adress") ? $this->input->post("adress") : "Türkiye / İstanbul",
                        "about" => $this->input->post("about") ? $this->input->post("about") : null,
                        "email" => $this->input->post("email") ? $this->input->post("email") : null,
                        "facebook" => $this->input->post("facebook") ? $this->input->post("facebook") : null,
                        "twitter" => $this->input->post("twitter") ? $this->input->post("twitter") : null,
                        "youtube" => $this->input->post("youtube") ? $this->input->post("youtube") : null,
                        "whatsapp" => $this->input->post("whatsapp") ? $this->input->post("whatsapp") : null,
                        "instagram" => $this->input->post("instagram") ? $this->input->post("instagram") : null,
                        "date" => date("Y-m-d H:i:s"),
                    );//VERİ TABANINA EKELNECEK DATA

                    if ($this->settings_model->add($data)) {
                        //EKLEME BAŞARILI
                        $session = array(
                            "type" => "success",
                            "text" => "Ayarlar Kaydedildi.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("settings"));
                    } else {
                        //EKLEME OLAYINDA HATA VAR
                        $session = array(
                            "type" => "error",
                            "text" => "Bir sorun oluştu, daha sonra tekrar deneyiniz.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("settings"));
                    }
                }
            }
            $this->load->view("$this->view/settings_v");
        } else {
            //AYARLAR VAR İSE GÜNCELLEME İŞLEMİ YAPILACAK
            if ($this->input->post("submit")) {
                $config = array(
                    array(
                        'field' => 'companyName',
                        'label' => 'Şirket Adı',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'email',
                        'label' => 'E-mail',
                        'rules' => 'required|valid_email|min_length[6]',
                    ),
                    array(
                        'field' => 'copyright',
                        'label' => 'Copyright',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'phone',
                        'label' => 'Telefon Numarası',
                        'rules' => 'required',
                    ),
                    array(
                        'field' => 'description',
                        'label' => 'Description',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'keywords',
                        'label' => 'Keywords',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'whatsapp',
                        'label' => 'Whatsapp',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'about',
                        'label' => 'Hakkımızda',
                        'rules' => 'required|min_length[6]',
                    ),
                    array(
                        'field' => 'adress',
                        'label' => 'Adres',
                        'rules' => 'required|min_length[6]',
                    ),

                );//POST KURALLARI
                $this->form_validation->set_rules($config);//POST KURAL KONTROLU
                if ($this->form_validation->run()) {
                    $data = array(
                        "companyName" => $this->input->post("companyName") ? $this->input->post("companyName") : "EntrBit Software",
                        "author" => $this->input->post("author") ? $this->input->post("author") : "EntrBit Software",
                        "copyright" => $this->input->post("copyright") ? $this->input->post("copyright") : "EntrBit Software",
                        "keywords" => $this->input->post("keywords") ? $this->input->post("keywords") : "EntrBit Software",
                        "description" => $this->input->post("description") ? $this->input->post("description") : "EntrBit Software",
                        "phone" => $this->input->post("phone") ? $this->input->post("phone") : "500 000 00 00",
                        "adress" => $this->input->post("adress") ? $this->input->post("adress") : "Türkiye / İstanbul",
                        "about" => $this->input->post("about") ? $this->input->post("about") : "Licanced EntrBit Software",
                        "email" => $this->input->post("email") ? $this->input->post("email") : "mail@turgutkursat.org",
                        "facebook" => $this->input->post("facebook") ? $this->input->post("facebook") : null,
                        "twitter" => $this->input->post("twitter") ? $this->input->post("twitter") : null,
                        "youtube" => $this->input->post("youtube") ? $this->input->post("youtube") : null,
                        "whatsapp" => $this->input->post("whatsapp") ? $this->input->post("whatsapp") : null,
                        "instagram" => $this->input->post("instagram") ? $this->input->post("instagram") : null,
                        "date" => date("Y-m-d H:i:s"),
                    );//VERİ TABANINA EKELNECEK DATA

                    if ($this->settings_model->update(array("id" => $settingsData->id), $data)) {
                        //EKLEME BAŞARILI
                        $session = array(
                            "type" => "success",
                            "text" => "Ayarlar Kaydedildi.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("settings"));
                    } else {
                        //EKLEME OLAYINDA HATA VAR
                        $session = array(
                            "type" => "error",
                            "text" => "Bir sorun oluştu, daha sonra tekrar deneyiniz.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("settings"));
                    }
                }
            }
            $resulData = array("settings" => $settingsData);
            $this->load->view("$this->view/settings_v", $resulData);
        }

    }

}
