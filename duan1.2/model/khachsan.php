<?php

function insert_khachsan($maks,$tenks,$diachi,$gioithieu){
    $sql = "insert into khachsan(makhachsan,tenkhachsan,diachi,gioithieu) values('$maks','$tenks','$diachi','$gioithieu')";
    pdo_execute($sql);
}

function delete_khachsan($idkhachsan){
    $sql = "delete from khachsan where idkhachsan=".$idkhachsan;
    pdo_execute($sql);
}

function loadall_khachsan(){
    $sql = "select * from khachsan order by idkhachsan desc";
    $listkhachsan=pdo_query($sql);
    return $listkhachsan;
}

?>