<?php
    // tính trừu tượng là cái gì mà không cụ thể được thì phải trừu tượng nó lên
    // class chứa phương thức trừu tượng: là class sẽ chứa trừu tượng
    // class trừu tượng sẽ có phương thức và thuộc tính nhuư các class khác nhưng không có biến khởi tạo

    //khai báo class trừu tượng động vật

use ConNguoi as GlobalConNguoi;

    abstract class DongVat {
        //khai báo phương thức trừu tượng
        abstract function di();
    }
    class ConCho extends DongVat {
        public function di(){
            echo "Con chó đi bằng 4 chân";
        }
    }
    class ConNguoi extends DongVat {
        public function di(){
            echo "Con người đi bằng 2 chân";
        }
    }
   
    $cc = new ConCho();
    $cc->di();
    echo "</br>";
    $cn = new ConNguoi();
    $cn->di();
?>