<?php
require_once "models/product.php";
class ProductController{
    function listProduct(){
        // gọi models
        $product = new Product(); //trả về một mảng dữ liệu từ trên sql
        // echo "<pre>";
        // var_dump($products);
        $products=$product->getProduct();
        include_once "views/product/listProduct.php";
        // return "Đây là danh sách sả phẩm";
    }
    
    function addProduct(){
        // $product = new Product();
        // $products=$product->getProduct();
        return "Đây là trang thêm sản phẩm";
    }
    function removeProduct(){
        deleteProduct();
        header("location: ?url=/");
    }
}

?>