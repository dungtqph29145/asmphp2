<?php
    include_once "models/Product.php";
    include_once "models/Customer.php";
    include_once "models/Category.php";
    include_once "controllers/CustomerController.php";
    include_once "controllers/ProductController.php";
    use models\Product;
    use models\Customer;
    use controllers\ProductController;
    $product = new Product();
    echo "<br>";
    $customer = new Customer();
    echo "<br>";
    $productcontroller = new ProductController();

    //tạo thư mục có tên là luyentapnsp
    //trong thu muc luyentapsp sẽ có 5 thư muc sau: bai1, bai2, bai3, bai4, bai5;
    //trong mỗi thư mục sẽ tạo ra các file và chứa class sau
    //sinhvien, giangvien, bacsi
    // mỗi clas đều có hàm khởi tạo
    //hiển thị ra "đây là:,.."
    //hãy đặt name space cho phù hợp để việc gọi các class thuộc các thư mục không bị trùng nhau


    
?>