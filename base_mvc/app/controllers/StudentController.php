<?php 
    namespace App\Controllers;
    use App\Models\Student;
use LDAP\Result;

    class StudentController extends BaseController{
        public $student;
        public function __construct()
        {
            $this->student = new Student();
        }
        public function index(){
            $student=$this->student->getStudent();
            return $this->render('student.index',compact('student'));
        }
        public function addStudent(){
            return $this->render('student.add');
        }
        public function postStudent(){
            //nếu người dùng ấn vào submit
            if(isset($_POST['submit'])){
                //tạo ra một mảng lỗi errors
                $errors = [];
                //nếu như bỏ trống
                if(empty($_POST['mssv'])){
                    $errors['mssv'] = "không được để trống mssv";
                }
                if(empty($_POST['name'])){
                    $errors['name'] = "không được để trống tên";
                }
                if(empty($_POST['email'])){
                    $errors['email'] = "không được để trống email";
                }
                if(empty($_POST['phone'])){
                    $errors['phone'] = "không được để trống sdt";
                }
                if(count($errors)>0){
                    $_SESSION['errors'] = $errors;
                    redirect('errors',$errors,'add-student');
                }else{
                    $result=$this->student->addStudent(Null,$_POST['mssv'],$_POST['name'],$_POST['email'],$_POST['phone']);
                    if($result){
                        // $_SESSION['success'] = "thêm sản phẩm thành công";
                        redirect('success',"thêm sản phẩm thành công",'add-student');
                    }
                }

            }
        }
        public function detail($id){
            $student=$this->student->getDetailStudent($id);
            return $this->render('student.edit', compact('student'));
        }
        public function editStudent($id){
            if(isset($_POST['submit'])){
                $result=$this->student->updateStudent($id, $_POST['mssv'], $_POST['name'],$_POST['email'], $_POST['phone']);
                if($result){
                    redirect('success',"Sửa  thành công", 'list-student');
                }
            }
        }
        public function delete($id){
            $result= $this->student->deleteStudent($id);
            if($result){
                redirect('success',"xóa thành công","list-student");
            }
        }
    }
?>