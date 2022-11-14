<?php
     if(is_array($dm)){
         extract($dm);
     }
?>

<div class="row">
    <div class="row frmtitle">
        <h1 class="h1e">CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                Mã loại<br>
                <input class="input1" type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên loại<br>
                <input class="input1" type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                <input class="a" type="submit" name="capnhat" value="CẬP NHẬT">
                <input class="a" type="reset" value="NHẬP LẠI">
                <a class="a" href="index.php?act=lisdm"><input class="a" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
       </div>
    </div>
</div>
