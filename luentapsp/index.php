<?php

include_once "bai1/BacSi.php";
include_once "bai2/BacSi.php";
include_once "bai1/SinhVien.php";
include_once "bai2/SinhVien.php";
use bai1\BacSi;
use bai1\SinhVien;
use bai2\BacSi as Bai2BacSi;
use bai2\SinhVien as Bai2SinhVien;

$Bacsi = new BacSi();
echo "<br>";
$Bacsi2 = new Bai2BacSi();
echo "<br>";
$Sinhvien = new SinhVien();
echo "<br>";
$Sinhvien2 = new Bai2SinhVien();