<?php
include 'db.php';
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // kiểm tra dữ liệu được gửi lên 
        // echo '<pre>';
        // print_r($_REQUEST);
        // echo '</pre>';



        
        //đặt biến
        // $MAHANG = $_REQUEST['stt'];
        $TENHANG = $_REQUEST['TENHANG'];
        $MACONGTY = $_REQUEST['MACONGTY'];
        $MALOAIHANG = $_REQUEST['MALOAIHANG'];
        $SOLUONG = $_REQUEST['SOLUONG'];
        $DONVITINH = $_REQUEST['DONVITINH'];
        $GIAHANG = $_REQUEST['GIAHANG'];

        $sql = "INSERT INTO c10_mat_hang (`TENHANG`, `MACONGTY`,`MALOAIHANG`,`SOLUONG`,`DONVITINH`,`GIAHANG`)
        VALUES ('$TENHANG','$MACONGTY',$MALOAIHANG,$SOLUONG,'$DONVITINH', $GIAHANG)";
        $conn->exec($sql);

    }
?>
<form action="" method="post">
    TENHANG: <input type="text" name="TENHANG" value=""> <br>
    MACONGTY: <input type="text" name="MACONGTY" value=""> <br>
    MALOAIHANG: <input type="text" name="MALOAIHANG" value=""> <br>
    SOLUONG: <input type="text" name="SOLUONG" value=""> <br>
    DONVITINH: <input type="text" name="DONVITINH" value=""> <br>
    GIAHANG: <input type="text" name="GIAHANG" value=""> <br>

    <input type="submit" value="Luu 1" name="luu_1">
</form>