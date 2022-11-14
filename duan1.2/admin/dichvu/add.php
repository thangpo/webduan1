    <div class="frmtitle">
        <h1 class="h1e">THÊM MỚI DỊCH VỤ</h1>
    </div>
    <div class="container">
    <div class="frmcontent">
        <form action="index.php?act=adddv" method="post">
        <div class="mb10">
                ID DỊCH VỤ<br>
                <input class="input1" type="text" name="id" disabled>
            </div>
            <div class="mb10">
            TÊN DỊCH VỤ<br>
                <input class="input1" type="text" name="tenkhachsan">
            </div>
            <div class="mb10">
            ICON DỊCH VỤ<br>
                <input class="input1" type="text" name="diachi">
            </div>
            <div class="mb10">
                <input class="a" type="submit" name="themmoi" value="THÊM MỚI">
                <input class="a" type="reset" value="NHẬP LẠI">
                <a class="a" href="index.php?act=listdv"><input class="a" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
       </div>
    </div>
</div>