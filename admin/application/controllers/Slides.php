<?php
defined('BASEPATH') OR exit('Doğrudan komut dosyasına erişime izin verilmiyor');

class Slides extends CI_Controller
{
    public $view = "slides_v";

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
        $slides = $this->slides_model->get_all();
        $resulData = array("slides" => $slides);
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
                $config['upload_path'] = 'assets/upload/slides/';
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
                        "image" => "assets/upload/slides/" . $dataIMG["file_name"],
                        "isActive" => $this->input->post("isActive"),
                        "title" => $this->input->post("title"),
                        "date" => date("Y-m-d H:i:s"),
                    );
                    if ($this->slides_model->add($data)) {
                        $session = array(
                            "type" => "success",
                            "text" => "Slider Eklendi.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("slides"));
                    } else {
                        $session = array(
                            "type" => "error",
                            "text" => "Bir sorun oluştu",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("slides/add"));
                    }
                }
            }
        }
        $this->load->view("$this->view/add_v");
    }

    public function update()
    {
        if (!$this->uri->segment(3))
            redirect(base_url("slides"));
        $dataSlide = $this->slides_model->get(array("id" => $this->uri->segment(3)));
        $resulData = array("data" => $dataSlide);
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
                if ($_FILES["image"]["error"] == 0) {
                    unlink("$dataSlide->image");
                    $config['upload_path'] = 'assets/upload/slides/';
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
                            "image" => "assets/upload/slides/" . $dataIMG["file_name"],
                            "isActive" => $this->input->post("isActive"),
                            "title" => $this->input->post("title"),
                            "date" => date("Y-m-d H:i:s"),
                        );
                        if ($this->slides_model->update(array("id" => $dataSlide->id), $data)) {
                            $session = array(
                                "type" => "success",
                                "text" => "Slider Güncellendi.",
                            );
                            $this->session->set_flashdata($session);
                            redirect(base_url("slides"));
                        } else {
                            $session = array(
                                "type" => "error",
                                "text" => "Bir sorun oluştu",
                            );
                            $this->session->set_flashdata($session);
                            redirect(base_url("slides/add"));
                        }
                    }
                } else {
                    $data = array(
                        "isActive" => $this->input->post("isActive"),
                        "title" => $this->input->post("title"),
                        "date" => date("Y-m-d H:i:s"),
                    );
                    if ($this->slides_model->update(array("id" => $dataSlide->id), $data)) {
                        $session = array(
                            "type" => "success",
                            "text" => "Slider Güncellendi.",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("slides"));
                    } else {
                        $session = array(
                            "type" => "error",
                            "text" => "Bir sorun oluştu",
                        );
                        $this->session->set_flashdata($session);
                        redirect(base_url("slides/add"));
                    }
                }
            }
        }
        $this->load->view("$this->view/update_v", $resulData);
    }

    public function delete()
    {
        if (!$this->uri->segment(3))
            redirect(base_url("slides"));
        $dataIMg = $this->slides_model->get(array("id" => $this->uri->segment(3)));
        unlink("$dataIMg->image");
        $this->slides_model->delete(array("id" => $this->uri->segment(3)));
        $session = array(
            "type" => "success",
            "text" => "Kayıt Silindi.",
        );
        $this->session->set_flashdata($session);
        redirect(base_url("slides"));

    }

}
