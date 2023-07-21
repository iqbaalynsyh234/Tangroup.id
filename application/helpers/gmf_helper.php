<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('pre'))
{
    function pre($data, $next = 0){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        if(!$next){ exit; }
    }
}

if ( ! function_exists( 'encyript_password' ) ) {
    function encyript_password( $password ) {
        $salt = '!@#$%^&*()<>?:9876543210ABCDEFG';
        return md5( $password.md5( $password.$salt ) );
    }
}

if ( ! function_exists( 'rupiah' ) ) {
    function rupiah($nilai){
       if($nilai==''){
          $nilai = 0;
       }
       $rupiah = number_format($nilai, 0, ',', '.');
       return $rupiah;
    }
}

if ( ! function_exists( 'rupiah_to_number' ) ) {
    function rupiah_to_number($rupiah){
       return intval(preg_replace("/[^0-9]/", "", $rupiah));
    }
}

if ( ! function_exists( 'my_slug' ) ) {
    function my_slug( $string ) {
        $string_lowercase = strtolower( $string );
        $filter = str_replace( array( ' ', '.', ',', ':', '/', '*', '^', '%', '$', '#', '(', ')', '_', "'", '"', '&', '~', '+', ';', '[', ']', '|', '{', '}', '`', '@', '`', '!'), '-', $string_lowercase );
        $max_dash    = 1;
        $val_find    = '-';
        $val_replace = '';

        while ( $max_dash > 0 ) {
            $val_find = $val_find . '-';
            $val_replace = $val_replace . '-';
            $max_dash--;
        }

        while ( strrpos( $filter, $val_find ) !== false ) {
             $filter = str_replace( $val_find, $val_replace, $filter );
        }
        return $filter;
    }
}

if ( ! function_exists( 'numbertostring' ) ) {
    function numbertostring($x) {
        $x = abs($x);
        $angka = array(" ", "satu", "dua", "tiga", "empat", "lima",
        "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = " ";
        if ($x <12) {
        $temp = " ".$angka[$x];
        } else if ($x <20) {
        $temp = kekata($x - 10). " belas";
        } else if ($x <100) {
        $temp = kekata($x/10)." puluh". kekata($x % 10);
        } else if ($x <200) {
        $temp = " seratus" . kekata($x - 100);
        } else if ($x <1000) {
        $temp = kekata($x/100) . " ratus" . kekata($x % 100);
        } else if ($x <2000) {
        $temp = " seribu" . kekata($x - 1000);
        } else if ($x <1000000) {
        $temp = kekata($x/1000) . " ribu" . kekata($x % 1000);
        } else if ($x <1000000000) {
        $temp = kekata($x/1000000) . " juta" . kekata($x % 1000000);
        } else if ($x <1000000000000) {
        $temp = kekata($x/1000000000) . " milyar" . kekata(fmod($x,1000000000));
        } else if ($x <1000000000000000) {
        $temp = kekata($x/1000000000000) . " trilyun" . kekata(fmod($x,1000000000000));
        }
        return $temp;
    }
}

if ( ! function_exists( 'encode64' ) ) {
    function encode64($data) { 
      return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
    } 
}

if ( ! function_exists( 'decode64' ) ) {
    function decode64($data) { 
      return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
    }
}

if ( ! function_exists( 'limitChar' ) ) {
    function limitChar( $content, $limit ) {
        if ( strlen( $content ) <= $limit ) {
            return $content;
        } else {
            $excerpt = substr( $content, 0, $limit );
            return $excerpt.'...';
        }
    }
}

if ( ! function_exists( 'web_settings' ) ) {
    function web_settings($keys) { 
        $CI =& get_instance();

        $data = array(
            'flag' => 1,
            'key'  => $keys
            );

        $CI->db->where($data);
        $query = $CI->db->get('web_settings')->row_array();

        return $query['values'];
    }
}

if ( ! function_exists( 'active_lang' ) ) {
    function active_lang() { 
        $CI =& get_instance();
        $lang    = $CI->session->userdata('site_lang');
        $lang_id = 1;
        if($lang == 'english'){
            $lang_id = 1;
        }else{
            $lang_id = 2;
        }

        return $lang_id;
    }
}

if ( ! function_exists( 'user_agent' ) ) {
    function user_agent() { 
        $CI =& get_instance();

        $CI->load->library('user_agent');

        if ($CI->agent->is_browser())
        {
            $agent = $CI->agent->browser().' '.$CI->agent->version();
        }
        elseif ($CI->agent->is_robot())
        {
            $agent = $CI->agent->robot();
        }
        elseif ($CI->agent->is_mobile())
        {
            $agent = $CI->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }

        return $agent.' - '.$CI->agent->platform();
    }
}
