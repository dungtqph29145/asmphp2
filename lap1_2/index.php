<?php
    $url = isset($_GET['url']) == true ? $_GET['url'] :'/';
    switch($url){
        //list thong tin
        case '/':
        require_once "./controllers/StudentControllers.php";
        $st = new StudentControllers();
        echo $st->listControllers();
        break;
        //add thong tin
        case 'add':
        require_once "./controllers/StudentControllers.php";
        $add = new StudentControllers();
        echo $add->addControllers();
        break;
        //save
        case 'save':
        require_once "./controllers/StudentControllers.php";
        $save = new StudentControllers();
        echo $save->saveControllers();
        break;
        //edit
        case 'edit':
        require_once "./controllers/StudentControllers.php";
        $edit = new StudentControllers();
        echo $edit->editControllers();
        break;
        //update
        case 'update':
            require_once "./controllers/StudentControllers.php";
            $update = new StudentControllers();
            echo $update->updateControllers();
            break;
        //delete
        case 'remove':
        require_once "./controllers/StudentControllers.php";
        $remove = new StudentControllers();
        echo $remove->remove();
        break;
        default:
    }
?>