<?php
include "../model/pdo.php";
include "../model/khachsan.php";
include "header.php";


if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'dsks':
            include "khachsan/add.php";
            break;
        case 'addks':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
               $maks=$_POST['makhachsan'];
               $tenks=$_POST['tenkhachsan'];
               $diachi=$_POST['diachi'];
               $gioithieu=$_POST['gioithieu'];
               insert_khachsan($maks,$tenks,$diachi,$gioithieu);
               $thongbao="thêm thành công";
           }
            include "khachsan/add.php";
            break;

        case 'listks':
            $listkhachsan=loadall_khachsan();
            include "khachsan/list.php";
            break;

    

        case 'dsks':
            include "dichvu/add.php";
            break;

        case 'adddv':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $maks=$_POST['makhachsan'];
                $tenks=$_POST['tenkhachsan'];
                $diachi=$_POST['diachi'];
                $gioithieu=$_POST['gioithieu'];
                insert_khachsan($maks,$tenks,$diachi,$gioithieu);
                $thongbao="thêm thành công";
            }
            
            include "dichvu/add.php";
            break;    
        default:
            
            break;    
    }
}else{
    
}
include "footer.php";
?>