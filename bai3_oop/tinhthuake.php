<?php
    class ConNguoi{
        public $chan;
        public $tay;
        public $mat;
        public $mui;
        public function an(){
            echo "An bang mom";
        }
        public function setChan($chan){
            $this->chan = $chan;
        }
        public function setTay($tay){
            $this->tay = $tay;
        }
    }
    class NguoiLon extends ConNguoi{
        
        public $longNach;

        public function di(){
            echo "đi bằng".$this->chan."chan";
        }
        public function noi(){

        }
    }  
    class TreCon extends ConNguoi{
        public function bo(){
            echo "Trẻ con bò bằng ".$this->tay." tay và ".$this->chan." chan";
        }
    }  
    $tc=new TreCon();
    $tc->setTay(2);
    $tc->setChan(2);
    $tc->bo();


    // $NguoiLon = new NguoiLon(); //khởi tạo đối tượng
    // $NguoiLon->an();
    // $NguoiLon->setChan(2);
    // $NguoiLon->di();
    //tạo ra hàm bò hiển thị trẻ con bò bằng 2 tay và 2 chân
?>