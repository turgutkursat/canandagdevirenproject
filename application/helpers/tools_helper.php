<?php

function getSettings()
{
    $t = &get_instance();
    $settings = $t->session->userdata("settings");
    if (empty($settings)) {
        $t->load->model("settings_model");
        $settings = $t->settings_model->get();
        $t->session->set_userdata("settings", $settings);
    } else {
        $t->load->model("settings_model");
        $data = $t->settings_model->get();
        if ($data->date != $settings->date){
            $t->session->set_userdata("settings", $data);
        }
    }
    return $settings;
}