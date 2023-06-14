<?php
//Đây là nơi sẽ đặt toàn bộ những biến chung của dự án
const DBNAME = "we18105";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";
const BASE_URL = "http://localhost/php2/base_mvc/";

function router($url){
    return BASE_URL.$url;
}
function redirect($key,$msg,$route){
    $_SESSION[$key] = $msg;
    switch($key){
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
        header('location:'.BASE_URL.$route."?msg=".$key);die();
}
?>
