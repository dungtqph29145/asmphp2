<?php
    
    require_once "vendor/autoload.php";
    use App\Models\Category;
    use App\Models\Customer;
    use App\Controllers\CategoryController;
    $category = new Category();
    echo "<br>";
    $customer = new Customer();
    echo "<br>";
    $category = new CategoryController();
 
?>