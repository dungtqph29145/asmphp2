<?php
    namespace NPS1;
    class SinhVien{
        public $ten;
        public $namSinh;

        public function __construct($ten, $namSinh){
            $this->ten = $ten;
            $this->namSinh = $namSinh;
        }
        public function hienThiThongTinSV(){
            echo "Tên sinh viên là:".$this->ten."</br>";
            echo "Tuổi sinh viên là:".$this->namSinh."</br>";
        }
    }
?>