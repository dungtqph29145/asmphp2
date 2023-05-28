<?php
// tạo class giảng viên
    class GiangVien {
        public $maGV;
        public $tenGV;
        public $namBatDau;
        public $soGioDay;
        public $luongCoBan;
//hàm khởi tạo magic function
        public function __construct($maGV,$tenGV,$namBatDau,$soGioDay,$luongCoBan)
        {
            $this->maGV = $maGV;
            $this->tenGV = $tenGV;
            $this->namBatDau = $namBatDau;
            $this->soGioDay = $soGioDay;
            $this->luongCoBan = $luongCoBan;
        }
//hiển thị thong tin
        public function hienThiThongTinGV(){
            echo "Mã giảng viên: ".$this->maGV."</br>";
            echo "Tên giảng viên: ".$this->tenGV."</br>";
            echo "Năm bắt đầu: ".$this->namBatDau."</br>";
            echo "Số giờ dạy: ".$this->soGioDay."</br>";
            echo "Lương cơ bản: ".$this->luongCoBan."</br>";
            echo "Thâm Niên: ".$this->tinhThamNien()."</br>";
            echo "Tổng lương: ".$this->tongLuong()."</br>";
            echo "Xếp loại: ".$this->xepLoai()."</br>";
        }
//tính thâm niên
        public function tinhThamNien(){
            return date('Y') - $this->namBatDau;
        }
//tổng lương
        public function tongLuong(){
            return $this->luongCoBan * $this->soGioDay;
        }
//xếp loại
        public function xepLoai(){
            $tongLuong = $this->tongLuong();
            if($tongLuong >= 5000){
                return "Đạt";
            }else {
                return "Không đạt";
            }
        }
    }
$giangVien = new GiangVien("GV001", "Nguyễn Văn A", 2013, 20000, 80);
$giangVien -> hienThiThongTinGV();

?>