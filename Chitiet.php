<?php
require('./config/db.php');
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-light">
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manager.php">Manager Users</a>
                        </li>


                    </ul>
                    <form class="d-flex me-auto">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="mt-4">
            <table class="table">
                <thead>
                    <?php
                    $reci_id = $_GET['reci_id'];
                    $select = "SELECT * FROM nguoi_nhan_mau where reci_id = $reci_id";
                    $result = mysqli_query($conn, $select);

                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <th scope="col">#</th>
                        </tr>
                        <tr>
                            <th scope="col"> Họ và tên: <?php echo $row['reci_name']; ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Tuổi: <?php echo $row['reci_age']; ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Nhóm máu: <?php echo $row['reci_bgrp']; ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Số lượng máu cần nhận(ml): <?php echo $row['reci_bqnty']; ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Giới tính: <?php echo $row['reci_sex']; ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Ngày đăng ký nhận: <?php echo $row['reci_reg_date']; ?></th>
                        </tr>
                        <tr>
                            <th scope="col">Số điện thoại: <?php echo $row['reci_phno']; ?></th>
                        </tr>
                        <tr>
                            <th scope="col">
                                <a href="sua.php?id=<?php echo $row['reci_id']; ?>"><i class="far fa-edit"></i></a>
                                <a href="xoa.php?id=<?php echo $row['reci_id']; ?>"><i class="far fa-trash-alt" style="color: red;"></i></a>
                            </th>
                        </tr>
                    <?php } ?>

                </thead>


            </table>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>