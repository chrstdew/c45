<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LanguageLoader {
    public function initialize() {
        $CI =& get_instance();
        $CI->load->helper('language');
        $lang = $CI->session->userdata('ei_lang');
        if($lang) {
            $CI->lang->load('content',$lang);
        }
        else {
            $CI->lang->load('content','english');
        }
   }
}

