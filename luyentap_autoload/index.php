<?php
    require_once "vendor/autoload.php";
    use App\Controllers\TestController;
    use App\Models\TestModel;
    $testController = new TestController();
    echo "<br>";
    $testModel = new TestModel();
?>