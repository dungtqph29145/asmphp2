<?php
    require_once "models/db.php";
    class Product{
        // xây dựng hàm truy vẫn lấy danh sách product
    
    function getProduct(){
        $db = new DB();
        $sql = "SELECT * FROM product";
        return $db->getData($sql); // không truyền giá trị fall vào thì sẽ mặc định lấy true;
    }
    function deleteProduct(){
        $id = $_GET['id'];
        $sql = "DELETE FROM product WHERE id = $id";
        getData($sql,false); 

        //bài tập lấy điểm lap 1 + 2
        // tạo một bảng customers gồm id, name, phone, age,
        //thực hiện làm chức năng thêm sửa xóa danh sách bằng mô hình mvc
        // thời gian chấm cùng asm
    }
    }
    
?>