<div class="row frmtitle">
        <h1>DANH MỤC SẢN PHẨM</h1>
    </div>
    <div class="container">
    <div class="row frmcontent">

        <div class="row frmdsloai">
            <table border="1">
                <tr class="tr1">
                    <th>ID KHÁCH SẠN</th>
                    <th>MÃ KHÁCH SẠN</th>
                    <th>TÊN KHÁCH SẠN</th>
                    <th>ĐỊA CHỈ</th>
                    <th>GIỚI THIỆU</th>
                    <th></th>
                </tr>
                
                <?php
                      foreach ($listkhachsan as $khachsan){
                          extract($khachsan);
                          $suaks = "index.php?act=suadm&id=".$idkhachsan;
                          $xoaks = "index.php?act=xoadm&id=".$idkhachsan;
                          echo '<tr>
                                  <td><p class="p01">'.$idkhachsan.'</p></td>
                                  <td><p class="p01">'.$makhachsan.'</p></td>
                                  <td><p class="p01">'.$tenkhachsan.'</p></td>
                                  <td><p class="p01">'.$diachi.'</p></td>
                                  <td><p class="p01">'.$gioithieu.'</p></td>
                                  <td><a class="td1" href="'.$suaks.'"><input class="z" type="button" value="Sửa"></a> 
                                  <a class="td1" href="'.$xoaks.'"><input class="z" type="button" value="Xóa"></a> </td>
                          </tr>';
                      }
                ?>
            </table>
        </div>
        <div class="tg"> 
            <input type="button" class="a" value="chọn tất cả">
            <input type="button" class="a" value="bỏ chọn tất cả">
            <input type="button" class="a" value="xóa các mục đã chọn">
            <a href="index.php?act=addks"><input class="a" type="button" value="nhập thêm"></a>
        </div>
    </div>
</div>