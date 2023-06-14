<?php
    namespace App\Models;
    class User extends BaseModel{
        protected $table = 'user';
        public function getUser(){
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function addUser($id, $userName,$email,$age){
            $sql = "INSERT INTO $this->table VALUES (?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute([$id, $userName,$email,$age]);
        }
        public function getDetailUser($id){
            $sql = "SELECT * FROM $this->table where id = ?";
            $this->setQuery($sql);
            return $this->loadRow([$id]);
        }
        public function updateUser($id, $userName, $email, $age){
            $sql="UPDATE $this->table SET userName = ?, email = ?, age = ? WHERE id=?";
            $this->setQuery($sql);
            return $this->execute([$userName, $email, $age,$id]);
        }
        public function deleteUser($id){
            $sql="delete from $this->table where id = ?";
            $this->setQuery($sql);
            return $this->execute([$id]);
        }
    }
?>