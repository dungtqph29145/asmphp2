<?php

namespace App\Controllers;

use App\Models\Product;
// use App\Models\Product;
class ProductController extends BaseController{
    public $product; //tạo thuộc tính product; 
    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index()
    {
        $products = $this->product->getProduct(); //đón giá trị từ model trả về
       return $this->render('product.index', compact("products"));
        
    }
    public function addProduct(){
        return $this->render('product.add');
    }
    public function postProduct(){
        //khi người dùng kích vào nút
        if(isset($_POST['nut'])){
            //validata
            //tạo ra 1 mảng lỗi error
            $errors = [];
            //nếu như bỏ trống ten_sp
            if(empty($_POST['ten_sp'])){
                $errors['ten_sp'] = "bạn không được để trống tên sản phẩm";
            }
            //nếu như bỏ trống đơn giá
            if(empty($_POST['gia_sp'])){
                $errors['gia_sp'] = "bạn không được để trống giá sản phẩm";
            }
            if(count($errors)>0){//có lỗi
                //push mảng lỗi này vào trong session
                // $_SESSION['errors'] = $errors;
                //nhảy về trang add product
                // header('location:'.BASE_URL.'add-product');die();
                redirect('errors',$errors,'add-product');
            }else{
                $result= $this->product->addProduct(NULL,$_POST['ten_sp'],$_POST['gia_sp']);
                if($result){
                    // $_SESSION['success'] = 'Thêm sản phẩm thành công';
                    // header('location:'.BASE_URL.'add-product');die();
                    redirect('success',"Thêm sản phẩm thành công", 'add-product');
                }
            }
        }
    }
    public function detail($id){
        $products=$this->product->getDetailProduct($id);
        return $this->render('product.edit',compact("products"));
    }
    public function editProduct($id){
        if(isset($_POST['nut'])){
            // $errors = [];
            // //nếu như bỏ trống ten_sp
            // if(empty($_POST['ten_sp'])){
            //     $errors['ten_sp'] = "bạn không được để trống tên sản phẩm";
            // }
            // //nếu như bỏ trống đơn giá
            // if(empty($_POST['gia_sp'])){
            //     $errors['gia_sp'] = "bạn không được để trống giá sản phẩm";
            // }
            // if(count($errors)>0){//có lỗi
            //     //push mảng lỗi này vào trong session
            //     // $_SESSION['errors'] = $errors;
            //     //nhảy về trang edit product
            //     // header('location:'.BASE_URL.'edit-product');die();
            //     redirect('errors',$errors,'edit-product');
            // }else{
                $result= $this->product->updateProduct($id,$_POST['ten_sp'],$_POST['gia_sp']);
                if($result){
                    // $_SESSION['success'] = 'Thêm sản phẩm thành công';
                    // header('location:'.BASE_URL.'add-product');die();
                    redirect('success',"Sửa sản phẩm thành công", 'list-product');
                }
            // }
        }
    }
    public function delete($id){
        $result=$this->product->deleteProduct($id);
        if($result){
            redirect('success',"xóa thành công",'list-product');
        }
    }

}
