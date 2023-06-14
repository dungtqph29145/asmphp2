<?php
    namespace App\Models;
    class Category extends BaseModel{
        protected $table = 'category';
        public function getCategory(){
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows(); //lấy ra tất cả danh mục;
        }
        public function add($id, $categoryName,$categoryDesc){
            $sql = "INSERT INTO $this->table value (?,?,?)";
            $this->setQuery($sql);
            return $this->execute([$id,$categoryName,$categoryDesc]) ; //add
        }
        public function getDetailCategory($id){
            $sql="SELECT * FROM $this->table where id = ?";
            $this->setQuery($sql);
            return $this->loadRow([$id]);
        }
        public function updateCategory($id,$categoryName,$categoryDesc){
            $sql = "UPDATE $this->table SET categoryName = ?, categoryDsc = ? where id =?";
            $this->setQuery($sql);
            return $this->execute([$categoryName,$categoryDesc,$id]);
        }
        public function deleteCategory($id){
            $sql="delete from $this->table where id = ?";
            $this->setQuery($sql);
            return $this->execute([$id]);
        }
    }
?>