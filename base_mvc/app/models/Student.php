<?php 
    namespace App\Models;
    class Student extends BaseModel{
        protected $table = 'student';
        public function getStudent(){
            $sql="SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        public function addStudent($id, $mssv,$name,$email,$phone){
            $sql = "INSERT INTO $this->table VALUES (?,?,?,?,?)";
            $this->setQuery($sql);
            return $this->execute([$id, $mssv,$name,$email,$phone]);
        }
        public function getDetailStudent($id){
            $sql = "SELECT * FROM $this->table where id = ?";
            $this->setQuery($sql);
            return $this->loadRow([$id]);
        }
        public function updateStudent($id, $mssv,$name,$email,$phone){
            $sql = "UPDATE $this->table SET mssv=?, name=?, email=?, phone=? WHERE id = ?";
            $this->setQuery($sql);
            return $this->execute([$mssv,$name,$email,$phone,$id]);
        }
        public function deleteStudent($id){
            $sql="delete from $this->table where id = ?";
            $this->setQuery($sql);
            return $this->execute([$id]);
        }
    }
?>