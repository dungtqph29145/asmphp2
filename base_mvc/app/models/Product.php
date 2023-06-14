<?php
namespace App\Models;

    class Product extends BaseModel{
        protected $table = "product";
        public function getProduct(){
            $sql = "SELECT * FROM $this->table";
            $this->setQuery($sql);
            return $this->loadAllRows(); // lấy tất cả
        }
            // setQuery dùng để set giá trị cho thàng cha
          // xây dựng hàm thêm sản phẩm
        public function addProduct($id,$tenSP,$gia){
            $sql = "INSERT INTO $this->table values (?,?,?)";
            $this->setQuery($sql);
            return $this->execute([$id,$tenSP,$gia]);
        }   
        //xaay dựng hàm lấy chi tiết sản phẩm
        public function getDetailProduct($id){
            $sql="SELECT * FROM $this->table where id = ?";
            $this->setQuery($sql);
            return $this->loadRow([$id]);
        }
        public function updateProduct($id,$tenSP,$gia){
            $sql = "update $this->table set tenSP=?, gia=? where id=?";
            $this->setQuery($sql);
            return $this->execute([$tenSP,$gia,$id]);
        }
        public function deleteProduct($id){
            $sql="delete from $this->table where id = ?";
            $this->setQuery($sql);
            return $this->execute([$id]);
        }
    }
?>
