<?php 
  include("pratials/header.php");
 ?> 
  <main class="bg-warning">
      <div class="container">
          <div class="row">
                <div>
                  <a class="btn btn-primary btn-sm " href="./Add.php" role="button">thêm</a>
                </div>
                <?php
                    if(isset($_GET['response'])){
                        if($_GET['response']=='successfully'){
                            echo "<p class='text-danger'>Thêm thành công</p>";
                        }
                        if($_GET['response']=='existed'){
                            echo "<p class='text-danger'>Thêm thất bại</p>";
                        }
                        if($_GET['response']=='ok'){
                            echo "<p class='text-danger'>Sửa thành công</p>";
                        }
                        if($_GET['response']=='xoa'){
                            echo "<p class='text-danger'>Xóa thành công</p>";
                        }
                        
                    }
                ?>
              <div class="directory-table">
                <div class="table">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Mã người nhận máu</th>
                            <th scope="col">Tên người nhận máu</th>
                            <th scope="col">Năm sinh (Tuổi)</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Số Điện Thoại</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                //lấy dữ liệu từ CSDL và để ra bảng (phần lặp lại)
                                //bước 1:kết nối tời csdl(mysql)
                                $conn = mysqli_connect('localhost','root','','hienmau');
                                if(!$conn){
                                    die("Không thể kết nối,kiểm tra lại các tham số kết nối");
                                }

                                //bước 2 khai báo câu lệnh thực thi và thực hiện truy vấn
                                $sql = "SELECT * from nguoi_nhan_mau";
                                $result = mysqli_query($conn,$sql);

                                //bước 3 xử lý kết quả trả về
                                if(mysqli_num_rows($result) > 0){
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($result)){
                            ?>
                            
                            <tr>
                            <th scope="row"><?php echo $i; ?> </th>
                            <td><?php echo $row['reci_id']; ?> </td>
                            <td><?php echo $row['reci_name']; ?> </td>
                            <td><?php echo $row['reci_age']; ?> </td>
                            <td><?php echo $row['reci_sex']; ?> </td>
                            <td><?php echo $row['reci_phno']; ?> </td>
                            <td><a href="sua.php?reci_id=<?php echo $row['reci_id']; ?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delete.php?reci_id=<?php echo $row['reci_id']; ?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                            <?php
                                $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
      </div>
</main>

<?php 
  include("pratials/footer.php");
 ?>
 