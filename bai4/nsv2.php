<?php
    namespace NPS2;
    // require_once "nsv1.php";
    class SinhVien{
        public $ten;
        public $tuoi;

        public function __construct($ten, $tuoi){
            $this->ten = $ten;
            $this->tuoi = $tuoi;
        }
        public function hienThiThongTinSV(){
            echo "Tên sinh viên là:".$this->ten."</br>";
            echo "Tuổi sinh viên là:".$this->tuoi."</br>";
        }
    }
    
?>