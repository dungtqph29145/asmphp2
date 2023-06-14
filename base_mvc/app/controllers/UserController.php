<?php 
    namespace App\Controllers;
    use App\Models\User;
    class UserController extends BaseController{
        public $user;
        public function __construct()
        {
            $this->user = new User();
        }
        public function index(){
            $user=$this->user->getUser();
            return $this->render('user.index', compact('user'));
        }
        public function addUser(){
            return $this->render('user.add');
        }
        public function postUser(){
            //nếu người dùng ấn vào submit
            if(isset($_POST['submit'])){
                //tạo ra một mảng lỗi errors
                $errors = [];
                //nếu như bỏ trống
                if(empty($_POST['name'])){
                    $errors['name'] = "không được để trống tên";
                }
                if(empty($_POST['email'])){
                    $errors['email'] = "không được để trống email";
                }
                if(empty($_POST['age'])){
                    $errors['age'] = "không được để trống tuổi";
                }
                if(count($errors)>0){
                    $_SESSION['errors'] = $errors;
                    redirect('errors',$errors,'add-user');
                }else{
                    $result=$this->user->addUser(Null,$_POST['name'],$_POST['email'],$_POST['age']);
                    if($result){
                        // $_SESSION['success'] = "thêm sản phẩm thành công";
                        redirect('success',"thêm sản phẩm thành công",'add-user');
                    }
                }

            }
        }
        public function detail($id){
            $user = $this->user->getDetailUser($id);
            return $this->render('user.edit', compact('user'));
        }
        public function editUser($id){
            if(isset($_POST['submit'])){
               
                    $result= $this->user->updateUser($id,$_POST['name'],$_POST['email'],$_POST['age']);
                    if($result){
                        redirect('success',"Sửa user thành công", 'list-user');
                    }
                // }
            }
        }
        public function delete($id){
            $result= $this->user->deleteUser($id);
            if($result){
                redirect('success',"xóa thành công","list-user");
            }
        }
    }
?>