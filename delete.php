<?php 

    //Include constants.php file here
    include('config/db.php');

    // 1. get the ID of Admin to be deleted
    $reci_id = $_GET['reci_id'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM nguoi_nhan_mau WHERE reci_id=$reci_id";
    $res = mysqli_query($conn, $sql);
    if($res==TRUE){
        $value='xoa';
        header("Location:index.php?response=$value");
    }else{
        echo 'xoa  tb';
    }
    mysqli_close($conn);

?>