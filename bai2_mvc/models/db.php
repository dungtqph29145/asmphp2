<?php
// tạo kết nối từ project php sang mysql
require_once "env.php";
class db{
    public function getConnect(){
        $connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        return $connect;
    }
    
    // Nếu getAll là true thì sx thực hiện truy vấn dữ liệu
    // Nếu getAll là fall thì sẽ thực hiện truy vấn thêm sửa xóa
    
    public function getData($query, $getAll = true){
        $conn = $this->getConnect();
    
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($getAll){
            return $stmt->fetchAll();
        }
    
        return $stmt->fetch();
    }
}

?>