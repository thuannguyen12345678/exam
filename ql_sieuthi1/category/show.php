<?php
include 'db.php';
//  echo '<pre>';
//  print_r( $_REQUEST );
//  echo '</pre>';

$id = $_REQUEST['id'];

$sql = "SELECT * FROM `mat_hang`  WHERE 1;";

//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);

//fetch se tra ve duy nhất 1 ket qua
$row = $stmt->fetch();

//  echo '<pre>';
//  print_r( $row );
//  echo '</pre>';

?>
<table border="1">
    <tr>
        <td>Tên hàng </td>
        <td> <?php echo $row->ten_hang;?> </td>
    </tr>
    <tr>
        <td> loại hàng </td>
        <td>  <?php echo $row->loai_hang;?> </td>
    </tr>
    <tr>
        <td> giá </td>
        <td> <?php echo $row->gia;?> </td>
    </tr>
    <tr>
        <td> số lượng </td>
        <td> <?php echo $row->so_luong;?> </td>
    </tr>
    <tr>
        <td> mô tả </td>
        <td> <?php echo $row->mo_ta;?> </td>
    </tr>
   
</table>
<a href="index.php">  Quay lại</a>