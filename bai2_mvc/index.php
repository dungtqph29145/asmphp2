<?php
   echo phpinfo();
   die();
    //file index sẽ điều hướng người dùng vào controller tương ứng
    // echo $_GET['url']; //$_GET sẽ lấy từ thanh url
    $url = isset($_GET['url']) == true ? $_GET['url'] : "/";
    // echo $url;
    // sử dụng switch - case để điều hướng url
    //case = add-product dieu huong ve trang addproduct
    switch ($url){
        case '/':
            // điều hướng url về controller sản phẩm
            require_once 'controllers/productControllers.php';
            $products=new ProductController();

            echo  $products->listProduct(); // gọi hàm trong controller product
        break;
        case 'add':
            // điều hướng url về add product sản phẩm
            require_once 'controllers/productControllers.php';
            echo $product->addProduct(); // gọi hàm trong controller product
        break;
        case 'removeProduct':
            //điều hướng về controller remove product
            require_once 'controllers/productControllers.php';
            echo $product->removeProduct(); // gọi hàm trong controller product
            break;
    }

?>