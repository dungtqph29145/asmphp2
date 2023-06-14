<?php 
    namespace App\Models;
    Class Car extends BaseModel{
        protected $table = "car";
        public function getCar(){
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        // public function add($id,$name,$price){
        //     $sql "INSERT INTO $this->table "
        // }
    }
?>