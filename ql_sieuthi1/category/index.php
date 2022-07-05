<?php
include "db.php";
//cau truy van
$sql = "SELECT * FROM `mat_hang`";
//truyền câu truy vấn vào
$stmt = $conn->query($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);
//fetchALL sẽ trả về dữ liệu nhiều hơn 1 kết quả
$rows = $stmt->fetchAll();
// echo '<pre>';
// print_r($rows);
// die();
?>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
<div class="container">
    <div class="row my-5">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header bg-secondary  d-flex justify-content-between align-items-center">
                    <h3 class="text-light">Trang chủ</h3>
                    <div class="card-btn">
                        <a href="add.php" class="btn btn-light" style="--clr:#ff1867"></i><span>Add New Category</span><i></i>
                        </a>
                    </div>
                </div>
                <div class="card-body" id="show_all_categories">
                    <div class="card-body" id="show_all_categories">

                        <table class="table table-striped table-sm text-center align-middle">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Tên hàng</th>
                                    <th>loại hàng</th>
                                    <th>giá</th>
                                    <th>số lượng</th>
                                    <th>ngày tạo</th>
                                    <th>mô tả</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rows as $key => $row) : ?>
                                    <tr>
                                        <td><?php echo $row->id; ?></td> 
                                        <td><?php echo $row->ten_hang; ?></td>
                                        <td><?php echo $row->loai_hang; ?></td>
                                        <td><?php echo $row->gia; ?></td>
                                        <td><?php echo $row->so_luong; ?></td>
                                        <td><?php echo $row->ngay_tao; ?></td>
                                        <td><?php echo $row->mo_ta; ?></td>
                                        <td>
                                            <a href="show.php?id=<?php echo $row->id; ?>">Xem</a> |
                                            <a href="edit.php?id=<?php echo $row->id; ?>">Sửa</a> |
                                            <a href="delete.php?id=<?php echo $row->id; ?>">Xóa</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="style.css">