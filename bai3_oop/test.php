<?php
    class ConNguoi {
        protected $hoten;
        protected $diachi;
        protected $namsinh;
        protected $email;
        protected $sdt;
        public function __construct($hoTen,$diaChi,$namSinh,$email,$sdt)
        {
            $this->hoTen = $hoTen;
            $this->diaChi = $diaChi;
            $this->namSinh = $namSinh;
            $this->email = $email;
            $this->sdt = $sdt;
        }
    
        public function setHoten($hoten) {
            $this->hoten = $hoten;
        }
    
        public function setDiachi($diachi) {
            $this->diachi = $diachi;
        }
    
        public function setNamsinh($namsinh) {
            $this->namsinh = $namsinh;
        }
    
        public function setEmail($email) {
            $this->email = $email;
        }
    
        public function setSdt($sdt) {
            $this->sdt = $sdt;
        }
    
        public function tinhtuoi() {
            $namHienTai = date('Y');
            return $namHienTai - $this->namsinh;
        }
    
        public function hienthiThongtin() {
            echo "Họ tên: " . $this->hoten . "<br>";
            echo "Địa chỉ: " . $this->diachi . "<br>";
            echo "Tuổi: " . $this->tinhtuoi() . "<br>";
            echo "Email: " . $this->email . "<br>";
            echo "Số điện thoại: " . $this->sdt . "<br>";
        }
    }
    
    class HocSinh extends ConNguoi {
        private $diemToan;
        private $diemLy;
        private $diemHoa;
    
        public function setDiemToan($diemToan) {
            $this->diemToan = $diemToan;
        }
    
        public function setDiemLy($diemLy) {
            $this->diemLy = $diemLy;
        }
    
        public function setDiemHoa($diemHoa) {
            $this->diemHoa = $diemHoa;
        }
    
        public function tinhDiemTB() {
            return ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
        }
    
        public function hienthiThongtin() {
            parent::hienthiThongtin();
            echo "Điểm TB: " . $this->tinhDiemTB() . "<br>";
        }
    }
    
    class GiangVien extends ConNguoi {
        private $luongCB;
        private $soGioDay;
    
        public function setLuongCB($luongCB) {
            $this->luongCB = $luongCB;
        }
    
        public function setSoGioDay($soGioDay) {
            $this->soGioDay = $soGioDay;
        }
    
        public function tinhTongLuong() {
            return $this->luongCB * $this->soGioDay;
        }
    
        public function hienthiThongtin() {
            parent::hienthiThongtin();
            echo "Tổng lương: " . $this->tinhTongLuong() . "<br>";
        }
    }
    
    // Sử dụng các lớp đã định nghĩa
    $hocsinh = new HocSinh("Quang Dũng","Hà Nội","2003","dungtqph29145@fpt.edu.vn","397503727");
    $hocsinh->hienthiThongtin();    
    $hocsinh->setHoten("Nguyễn Văn A");


?>