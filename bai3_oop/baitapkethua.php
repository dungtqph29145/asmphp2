<?php
    // /tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
    // tạo phương thức set cho các thuộc tính trên
    // tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
    // tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
    //tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
    // tạo phương thức set cho các thuộc tính trên
    //tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
    //tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
    // hoten,diachi,tuoi,email,sdt,điểm TB
    //tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
    //// tạo phương thức set cho các thuộc tính trên
    /// tạo phương thức tính tổng lương = luongCB *soGioDay
    /// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
    //// hoten,diachi,tuoi,email,sdt,tổng lương
    
    //tạo class

    class ConNguoi{
        public $hoTen;
        public $diaChi;
        public $namSinh;
        public $email;
        public $sdt;
        
       //phương thức set
    public function __construct($hoTen,$diaChi,$email,$namSinh,$sdt)
       {
           $this->hoTen = $hoTen;
           $this->diaChi = $diaChi;
           $this->namSinh = $namSinh;
           $this->email = $email;
           $this->sdt = $sdt;
       }
   
    //tinh tuoi
    public function tinhTuoi(){
        return date('Y') - $this->namSinh;
    }
    public function hienThiThongTin(){
            echo "Họ tên: ".$this->hoTen."</br>";
            echo "Địa chỉ: ".$this->diaChi."</br>";
            echo "Email: ".$this->email."</br>";
            echo "Năm sinh: ".$this->namSinh."</br>";
            echo "Sdt: ".$this->sdt."</br>";
            echo "Tuổi: ".$this->tinhTuoi()."</br>";
    }
    }
    echo 'Con Người'."</br>";
    $CN = new ConNguoi("Quang Dũng","Hà Nội","dungtqph29145@fpt.edu.vn",2003,397503727);
    $CN->hienThiThongTin();

//hoc sinh
class HocSinh extends ConNguoi
{
    public $diemToan;
    public $diemLy;
    public $diemHoa;

    public function __construct($hoTen, $diaChi, $email, $namSinh, $sdt, $diemToan, $diemLy, $diemHoa)
    {
        //gọi hàm khởi tạo của cha
        parent::__construct($hoTen, $diaChi, $email, $namSinh, $sdt);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
        // $this->hoTen = $hoTen;
        // $this->diaChi = $diaChi;
        // $this->email = $email;
        // $this->namSinh = $namSinh;
        // $this->sdt = $sdt;
    }

    public function diemTB()
    {
        return ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
    }

    public function TTSV()
    {
        echo $this->hienThiThongTin()  . 'diem Tb: ' . $this->diemTB();
    }
}
echo '</br>';
echo 'Học sinh'."</br>";
$sv = new HocSinh("Quang Dũng", "Hà Nội", "dungtqph29145@fpt.edu.vn", 2003, "97503727", 9, 8, 7);
$sv->TTSV();

//giảng viên
class GiangVien extends ConNguoi
{
    public $luongCB;
    public $soGioDay;
    public function __construct($hoTen, $diaChi, $email, $namSinh, $sdt, $luongCB, $soGioDay)
    {
        parent::__construct($hoTen, $diaChi, $email, $namSinh, $sdt);   
        // $this->hoTen = $hoTen;
        // $this->diaChi = $diaChi;
        // $this->email = $email;
        // $this->namSinh = $namSinh;
        // $this->sdt = $sdt;
        $this->luongCB = $luongCB;
        $this->soGioDay = $soGioDay;
    }

    public function tongLuong()
    {
        return $this->luongCB * $this->soGioDay;
    }

    public function TTGV()
    {
        echo $this->hienThiThongTin() . 'Tổng lương: ' . $this->tongLuong() . 'VND';
    }
}

echo '</br>';
echo '</br>';
echo 'Giảng viên'.'</br>';
$sv = new GiangVien("Quang Dũng", "Hà Nội", "dungtqph29145@fpt.edu.vn", 2003, "97503727", 10000, 12);
$sv->TTGV();
?>
    