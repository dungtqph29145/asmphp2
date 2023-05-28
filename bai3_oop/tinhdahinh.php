<?php
    //abstract - imterface sự khác nhau
    //+ abstract là class còn interface thì không
    //+ interface chỉ có duy nhất phương thức trìu tượng và không có thuộc tính và phương thức bình thường
    //+ interface và abstract đều là bản thiết kế chung cho hệ thống phần mềm, nhưng interface là bản thiết kế cho các class có chung hành động
    //+ abstract là bản thiết kế cho các class có cùng bản chất
    interface DiChuyen{
        function di(); //không cần phải ghi abstract ở trước nhưng auto là phương thức trừu tượng

    }
    class ConTro implements DiChuyen{
        public function di(){
            echo "Con chó đi bằng 4 chân";
        }
    }
    class ConNguoi implements DiChuyen{
        public function di(){
            echo "Con người đi bằng 2 chân";
        }
    }

?>