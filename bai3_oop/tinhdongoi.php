<?php
    //đối tượng: là những gì cầm đc nắm đưuọc,...
    //lớp: là khuôn tạo nên nhiều đối tượng
    //đối tượng: +Đặc điểm: là những gì hình thành nên đối tượng - thuộc tính - biến
                //+Hành động: là những gì đối tượng có thể làm đc - phương thức - hàm

    //Xây dựng 1 class hay gọi là một khuôn mẫu cho nhiều đối tượng sinh viên
    class SinhVien {
        //khai báo thuộc tính tức là khai báo biến
        public $maSV;
        public $tenSV;
        public $namSinh;
        //hàm khởi tạo một dạng magic function
        public function __construct($maSV, $tenSV, $namSinh)
        {
             $this -> maSV = $maSV;
            $this -> tenSV = $tenSV;
            $this -> namSinh = $namSinh;
        }
        //Tạo ra một phương thức set giá trị
        public function setMaSV($maSV){
            $this->maSV = $maSV;
        }
        public function setTenSV($tenSV){
            $this->tenSV = $tenSV;
        }
        public function setNamSinh($namSinh){
            $this->namSinh = $namSinh;
        }


        //khai báo phương thức tức là khai báo hàm

        public function hienThiThongTinSV(){
            echo $this -> maSV."</br>".$this -> tenSV."</br>".$this -> namSinh."</br>".$this->tinhTuoi();
        }

        public function tinhTuoi(){
            return date('Y') - $this->namSinh;
        }
    }
    
    //khởi tạo đối tượng tức là tạo ra 1 sinh viên (cứ khởi tạo là phải có new)
  
    $sv1=new SinhVien("ph29145","TQD", 2003);
    // $sv1->setMaSV(" ph29145 ");
    // $sv1->setTenSV(" Quang Dung ");
    // $sv1->setNamSinh(" 2003 ");
    $sv1->hienThiThongTinSV();

    //tạo một hàm tính tuổi có trả về = năm hiện tại - năm sinh sau đấy hiển thị thông tin, tuổi sinh viên
?>