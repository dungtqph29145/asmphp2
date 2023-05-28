<?php
    require_once "models/db.php";
    class StudentModels{
        // xây dựng hàm truy vẫn lấy danh sách product
    
    function getStudent(){
        $db = new DB();
        $sql = "SELECT * FROM students";
        return $db->getData($sql); // không truyền giá trị fall vào thì sẽ mặc định lấy true;
    }
    function add(){
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $age = $_POST['age'];
            $sql = "INSERT INTO `students`(`name`, `phone`, `age`) VALUES ('$name','$phone','$age')";
            $db = new db();
            $db->getData($sql);
            $thongbao="Thêm Thành Công";
        }
        
    }
    function find($id){
        $sql = "SELECT * FROM students WHERE id = $id";
        $db = new db();
        return $db->getData($sql,false);
    }
    function update(){
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $age = $_POST['age'];
            $sql = "UPDATE students SET `name`='$name', `phone`='$phone',`age`=$age Where id = $id";
            $db = new db();
            $db->getData($sql);
    }
}
    function deleteStudent(){
        $id = $_GET['id'];
        $sql = "DELETE FROM students WHERE id = $id";
        $db=new DB();
        $db->getData($sql);

        //bài tập lấy điểm lap 1 + 2
        // tạo một bảng customers gồm id, name, phone, age,
        //thực hiện làm chức năng thêm sửa xóa danh sách bằng mô hình mvc
        // thời gian chấm cùng asm
    }
    
}
?>