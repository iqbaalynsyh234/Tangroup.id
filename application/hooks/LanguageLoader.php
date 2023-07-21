<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');

        $siteLang = $ci->session->userdata('site_lang');

        if ($siteLang) {
            $ci->lang->load('language', $siteLang);
        } else {
            $ci->session->set_userdata('site_lang', 'english');
            $ci->lang->load('language', 'english');
        }
    }
}