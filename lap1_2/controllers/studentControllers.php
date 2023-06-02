<?php
    require_once "models/StudentModels.php";
    class StudentControllers{
        function listControllers(){
            $st = new StudentModels();
            $student=$st->getStudent();
            // print_r($student);
            include_once "views/listStudent.php";
        }
        function addControllers(){
            // $add = new StudentModels();
            // $add->add();
            include_once "views/addStudent.php";
            // header("location: index.php?url=/");
        }
        function saveControllers(){
            $add = new StudentModels();
            $add->add();
            header("location: index.php?url=/");
        
        }
        function editControllers(){
            $id = $_GET["id"];
            $edit = new StudentModels();
            $student=$edit->find($id);
            // $add->add();
            include_once "views/editStudent.php";
            // header("location: index.php?url=/");
        }
        function updateControllers(){
            $update = new StudentModels();
            $update->update();
            header("location: index.php?url=/");
        
        }
        function remove()
        {
            $remove = new StudentModels();
            $remove->deleteStudent();
            header("location: index.php?url=/");
        }
    }
?>