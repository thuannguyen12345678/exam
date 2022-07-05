<?php
//ket noi CSDL
include 'db.php';

// Controller
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ten_hang = $_REQUEST['ten_hang'];
    $loai_hang = $_REQUEST['loai_hang'];
    $gia = $_REQUEST['gia'];
    $so_luong = $_REQUEST['so_luong'];
    $ngay_tao = $_REQUEST['ngay_tao'];
    $mo_ta = $_REQUEST['mo_ta'];



    //Model
    //cau query
    $sql = "INSERT INTO mat_hang(ten_hang, loai_hang, gia, so_luong, ngay_tao, mo_ta )
         VALUES('$ten_hang', '$loai_hang', '$gia', '$so_luong', current_timestamp(),'$mo_ta');";
    //check sql
    // var_dump($sql);die();

    //thuc hien truy van
    $conn->exec($sql);
    //truyền câu truy vấn vào
    $sql = "SELECT * FROM mat_hang";
    $stmt = $conn->query($sql);
    //Thiết lập kiểu dữ liệu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //fetchALL sẽ trả về dữ liệu nhiều hơn 1 kết quả
    $rows = $stmt->fetchAll();
    header("location:index.php");
    // echo '<pre>';
    // print_r($rows);
    // die();

}
?>
<form action="" method="post">
ten_hang: <input type="text" name="ten_hang"><br>
loai_hang: <input type="text" name="loai_hang"><br>
gia: <input type="text" name="gia"><br>
so_luong: <input type="text" name="so_luong"><br>
ngay_tao: <input type="date" name="ngay_tao"><br>
mo_ta: <input type="text" name="mo_ta"><br>
    <button type="submit">Thêm</button>
</form>