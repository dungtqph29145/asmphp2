<?php
    
    include_once "nsv1.php";
    include_once "nsv2.php";
    //khởi tạo
    $sv = new NPS1\SinhVien("DŨNG", "2003"); //file nps 1
    $sv->hienThiThongTinSV();
    echo "<br>";
    echo "<br>";
    $sv2 = new NPS2\SinhVien("DŨNG", "20");// file nsp2
    $sv2->hienThiThongTinSV();
    //namespace sẽ giúp chúng ta phân biệt được các class ở các file nếu chúng trùng nhau
    //namespace phải đặt ở đầu file
    //namespace thì không bao giờ trùng nhau
?>