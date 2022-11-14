
    <div class="frmtitle">
        <h1 class="h1e">THÊM MỚI KHÁCH SẠN</h1>
    </div>
    <div class="container">
    <div class="frmcontent">
        <form action="index.php?act=addks" method="post">
        <div class="mb10">
                ID KHÁCH SẠN<br>
                <input class="input1" type="text" name="idkhachsan" disabled>
            </div>
            <div class="mb10">
                MÃ KHÁCH SẠN<br>
                <input class="input1" type="text" name="makhachsan">
            </div>
            <div class="mb10">
            TÊN KHÁCH SẠN<br>
                <input class="input1" type="text" name="tenkhachsan">
            </div>
            <div class="mb10">
                ĐỊA CHỈ<br>
                <input class="input1" type="text" name="diachi">
            </div>
            <div class="mb10">
                GIỚI THIỆU<br>
                <input class="input1" type="text" name="gioithieu">
            </div>
            <div class="mb10">
                <input class="a" type="submit" name="themmoi" value="THÊM MỚI">
                <input class="a" type="reset" value="NHẬP LẠI">
                <a class="a" href="index.php?act=listks"><input class="a" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                  if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
       </div>
    </div>
</div>