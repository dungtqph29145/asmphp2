<?php
    require_once "vendor/autoload.php";
    use App\Controllers\ProductController;
    use App\Models\ProductModel;
    $productController = new ProductController;
    echo "<br>";
    $productModel = new ProductModel;
?>