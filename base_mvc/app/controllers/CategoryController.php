<?php

namespace App\Controllers;

use App\Models\Category;
use Exception;

class CategoryController extends BaseController
{
    public $category; //tạo thuộc tính category
    public function __construct()
    {
        $this->category = new Category();
    }
    public function index()
    {
        $category = $this->category->getCategory(); // đón giá trị từ model
        return $this->render('category.index', compact('category'));
    }
    public function addCategory()
    {
        return $this->render('category.add');
    }

    public function postCategory()
    {
      //khi người dùng bấm vào nút submit
        if(isset($_POST['submit'])){
            //validate
            //tạo ra mảng lỗi error
            $errors = [];
            //nếu như trống tên danh mục
            if(empty($_POST['categoryName'])){
                $errors['categoryName'] = "không được để trống tên danh mục";
            }
            if(empty($_POST['categoryDsc'])){
                $errors['categoryDsc']="không được để trống chú thích";
            }
            if(count($errors)>0){ // có lỗi
                //push mảng này vào trong session
                $_SESSION['errors']=$errors;
                redirect('errors', $errors, 'add-category');
            }else{
                $result=$this->category->add(Null,$_POST['categoryName'],$_POST['categoryDsc']);
                if($result){
                    // $_SESSION['success'] = "thêm sản phẩm thành công";
                    redirect('success',"thêm sản phẩm thành công",'add-category');
                }
            }
        }
        
    }
    public function detail($id){
        $category=$this->category->getDetailCategory($id);
        return $this->render('category.edit',compact('category'));
    }
    public function editProduct($id){
        if(isset($_POST['submit'])){
           
                $result= $this->category->updateCategory($id,$_POST['categoryName'],$_POST['categoryDsc']);
                if($result){
                    // $_SESSION['success'] = 'Thêm sản phẩm thành công';
                    // header('location:'.BASE_URL.'add-product');die();
                    redirect('success',"Sửa sản phẩm thành công", 'list-category');
                }
            // }
        }
    }
    public function delete($id){
        $result= $this->category->deleteCategory($id);
        if($result){
            redirect('success',"xóa thành công","list-category");
        }
    }
}
