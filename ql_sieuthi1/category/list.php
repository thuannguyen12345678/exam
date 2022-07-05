<?php
include 'db.php';

//cau truy van
$sql = "SELECT * FROM `mat_hang`";

//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);

//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();

// echo '<pre>';
// print_r($rows);
// die();

?>

<table border="1">
    <thead>
        <tr>
            <th>stt</th>
            <th>ten_hang</th>
            <th>loai_hang</th>
            <th>gia</th>
            <th>so_luong</th>
            <th>ngay_tao</th>
            <th>mo_ta</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach( $rows as $key => $row ): ?>
            <tr>
                <td><?php echo $row->stt; ?></td>
                <td><?php echo $row->ten_hang; ?></td>
                <td><?php echo $row->loai_hang; ?></td>
                <td><?php echo $row->gia; ?></td>
                <td><?php echo $row->so_luong; ?></td>
                <td><?php echo $row->ngay_tao; ?></td>
                <td><?php echo $row->mo_ta; ?></td>
                <td>
                    <a href="show.php?id=<?php echo $row->stt; ?>">Xem</a> | 
                    <a href="edit.php?id=<?php echo $row->stt; ?>">Sua</a> | 
                    <a href="">Xoa</a>|
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>