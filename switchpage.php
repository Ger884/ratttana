<?php


switch ($_GET['page']) {
   case 'data':    //เอาไว้เรียกโดยไม่เปลี่ยนหน้า
       include 'data.php'; //หน้าหลัก
       break;


   default:
       echo '';
       include 'data.php'; //หน้าที่ถูกเรียกใช้งานเป็นหน้าแรก
}



