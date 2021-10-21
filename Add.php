<?php
  if(isset($_POST['btnSave'])){
    
    $reci_name      = $_POST['txtHoTen'];
    $reci_age    = $_POST['txtTuoi'];
    $reci_bgrp    = $_POST['txtNhomMau'];
    $reci_bqnty    = $_POST['txtSLMau'];
    $reci_sex     = $_POST['txtGioiTinh'];
    $reci_reg_date     = $_POST['dateNgayDK'];
    $reci_phno  = $_POST['txtMobile'];

    $sql = "INSERT INTO nguoi_nhan_mau(reci_name, reci_age, reci_bgrp, reci_bqnty, reci_sex, reci_reg_date,reci_phno )
    VALUES('$reci_name','$reci_age','$reci_bgrp ','$reci_bqnty,'$reci_sex','$reci_reg_date','$reci_phno')";

    echo $sql."<br>";

    if(mysqli_query($conn,$sql)==TRUE){
      $value='successfully';
      header("Location:index.php?response=$value");
    }else{
      $value='existed';
      header("Location:index.php?response=$value");
    }
    mysqli_close($conn);
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

    <title>Add</title>
  </head>
  <body>
      <header class="p-3  btn-success text-white">
          <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                  <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Khởi động" _mstaria-label="2264249"><use xlink:href="#bootstrap"></use></svg>
                  </a>

                  <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="index.php" class="nav-link px-2 text-white" _msthash="1633359" _msttexthash="44122">Trang chủ</a></li>
                  <li><a href="#" class="nav-link px-2 text-white" _msthash="1633905" _msttexthash="5116020">Quản lý Người Hiến Máu</a></li>
                    
                   </ul>
              </div>
          </div>
      </header>
      <main class="mt-4">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2>Thêm người hiến máu </h2>
                <form action="Add.php" method="post">
                  
                  <div class="row mb-3">
                    <label for="txtHoTen" class="col-sm-2 col-form-label">Họ Và Tên</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtHoTen" name="txtHoTen">
                    </div>
                  </div>
                  <div class="row mb-3">
                  <label for="txtGioiTinh" class="col-sm-2 col-form-label">Tuổi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtGioitinh" name="txtTuoi">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtNamSinh" class="col-sm-2 col-form-label">Nhóm Máu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtNamSinh" name="txtNhomMau">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtNhomMau" class="col-sm-2 col-form-label">Số Lượng Máu Cần Nhận</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtNhomMau" name="txtSLMau">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtNhomMau" class="col-sm-2 col-form-label">Giới Tính</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="txtNhomMau" name="txtGioiTinh">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="datetimepickerInline" class="col-sm-2 col-form-label">Ngày Đăng Kí Nhận Máu</label>
                    <div class="form-outline datetimepicker col-sm-10" data-mdb-inline="true" >
                      <input type="date" class="form-control" id="datetimepickerInline" name="dateNgayDK"/>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="txtMobile" class="col-sm-2 col-form-label">Số điện thoại</label>
                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="txtMobile" name="txtMobile">
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary" name="btnSave">Lưu</button>
                </form>
              </div>
            </div>
        </div>
      </main>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>