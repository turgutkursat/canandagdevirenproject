<?php
defined('BASEPATH') OR exit('Doğrudan komut dosyasına erişime izin verilmiyor');

class do_login extends CI_Controller
{
    public $doLogin = "login_v";

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        if ($this->uri->segment(1) != "logout" && isset($this->session->logged_in)) {
            redirect(base_url("index"));
        }
    }

    public function register()
    {

        if ($this->input->post("submit")) {
            $config = array(
                array(
                    'field' => 'fullName',
                    'label' => 'Ad ve Soyad',
                    'rules' => 'min_length[6]|trim|required'
                ),
                array(
                    'field' => 'email',
                    'label' => 'E-mail',
                    'rules' => 'required|valid_email|min_length[6]|is_unique[users.email]',
                    'errors' => array(
                        'is_unique' => 'Bu %s adresi daha önceden kullanılmış.',
                    ),
                ),
                array(
                    'field' => 'password',
                    'label' => 'Şifre',
                    'rules' => 'matches[rePassword]|min_length[6]|trim|required',
                ),
                array(
                    'field' => 'rePassword',
                    'label' => 'Şifre Tekrarı',
                    'rules' => 'matches[rePassword]|min_length[6]|trim|required',

                ),

            );

            $this->form_validation->set_rules($config);

            if ($this->form_validation->run()) {
                $data = array(
                    "fullName" => $this->input->post("fullName"),
                    "email" => strtolower(trim($this->input->post("email"))),
                    "password" => base64_encode(gzcompress(serialize($this->input->post("password")))),
                    "image" => "assets/images/uploads/user.png",
                    "rank" => "1",
                    "date" => date("Y-m-d H:i:s"),
                );
                $insertUser = $this->user_model->add($data);

                if ($insertUser) {
                    $session = array(
                        "type" => "success",
                        "text" => "Hesabınız oluşturuldu, yönetici tarafıdan en kısa zamanda geri dönüş yapılacak.",
                    );
                    $this->session->set_flashdata($session);
                    redirect(base_url("register"));
                } else {
                    $session = array(
                        "type" => "error",
                        "text" => "Hesabınızı oluşturamadık, en kısa zamanda tekrar deneyiniz.",
                    );
                    $this->session->set_flashdata($session);
                    redirect(base_url("register"));
                }
            }
        }
        $this->load->view("$this->doLogin/registerPage");
    }

    public function login()
    {
        if ($this->input->post("submit")) {
            $config = array(
                array(
                    'field' => 'email',
                    'label' => 'E-mail',
                    'rules' => 'required|valid_email|min_length[6]',
                ),
                array(
                    'field' => 'password',
                    'label' => 'Şifre',
                    'rules' => 'min_length[6]|trim|required',
                ),
            );

            $this->form_validation->set_rules($config);

            if ($this->form_validation->run()) {
                $userData = array(
                    "email" => $this->input->post("email"),
                    "password" => base64_encode(gzcompress(serialize($this->input->post("password")))),
                    "rank" => 2,//rank 1=user , 2=admin
                );
                if ($result = $this->user_model->get($userData)) {
                    $session = array(
                        "type" => "success",
                        "text" => "Oturum açıldı, lütfen bekleyiniz.",
                    );
                    $this->session->set_flashdata($session);
                    $userData = array(
                        "logged_in" => true,
                        "user" => $result,
                    );
                    $this->session->set_userdata($userData);
                    $this->load->view("$this->doLogin/loginPage");
                    header("refresh:3;url=" . base_url());
                } else {
                    $session = array(
                        "type" => "error",
                        "text" => "Hesap bulunamadı, lütfen bilgilerinizi kontrol ediniz.",
                    );
                    $this->session->set_flashdata($session);
                    $this->session->mark_as_temp(array('user' => 1800, "logged_in" => 1800));
                    $this->load->view("$this->doLogin/loginPage");
                }
            }
        } else
            $this->load->view("$this->doLogin/loginPage");
    }

    public function logout()
    {
        session_destroy();
        redirect(base_url("login"));
    }

}
