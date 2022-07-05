<?php
include_once 'db.php';
//  echo '<pre>';
//  print_r( $_REQUEST );
//  echo '</pre>';

$id = $_REQUEST['id'];
//  echo $id;
//  die();
$sql = "SELECT * FROM `mat_hang`
WHERE id=$id;";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$row = $stmt->fetch();

//   echo '<pre>';
//  print_r( $row );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $id = $_REQUEST['id'];
    $ten_hang = $_REQUEST['ten_hang'];
    $loai_hang = $_REQUEST['loai_hang'];
    $gia = $_REQUEST['gia'];
    $so_luong = $_REQUEST['so_luong'];
    $ngay_tao = $_REQUEST['ngay_tao'];
    $mo_ta = $_REQUEST['mo_ta'];
    $sql = "UPDATE `mat_hang` 
    SET `ten_hang`='$ten_hang',`loai_hang`='$loai_hang',`gia`='$gia',`so_luong`='$so_luong',`ngay_tao`='$ngay_tao',`mo_ta`='$mo_ta'
     WHERE id = '$id';";
    $conn->exec($sql);

    header("Location: index.php");
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>thi modulwa</title>
</head>

<body>
    <h1>Thi modules2</h1>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>

</html>

<form action="" method="post">
    
    <label for="exampleInputEmail1" class="form-label">ten_hang: </label>
    <input type="text" name="ten_hang" class="form-control" id="exampleInputEmail1" value="<?php echo $row->ten_hang; ?>"> <br>

   
    <label for="exampleInputEmail1" class="form-label"> loai_hang:  </label>
    <input type="text" name="loai_hang" class="form-control" id="exampleInputEmail1" value="<?php echo $row->loai_hang; ?>"> <br>
    
    <label for="exampleInputEmail1" class="form-label"> gia:  </label>
    
    <input type="text" name="gia" class="form-control" id="exampleInputEmail1" value="<?php echo $row->gia; ?>"> <br>
    
    <label for="exampleInputEmail1" class="form-label">so_luong:   </label>
    
    <input type="text" name="so_luong" class="form-control" id="exampleInputEmail1" value="<?php echo $row->so_luong; ?>"> <br>
   
    <label for="exampleInputEmail1" class="form-label"> ngay_tao:   </label>
    
    <input type="date" name="ngay_tao" class="form-control" id="exampleInputEmail1" value="<?php echo $row->ngay_tao; ?>"> <br>
  
    <label for="exampleInputEmail1" class="form-label">   mo_ta:   </label>
    
    <input type="text" name="mo_ta" class="form-control" id="exampleInputEmail1" value="<?php echo $row->mo_ta; ?>"> <br>

    <input type="submit" value="Luu 1" name="luu_1">
</form>