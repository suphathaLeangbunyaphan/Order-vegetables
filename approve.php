<?php 
    require 'connect.php';
    $id=$_POST['id'];
    
    $update="update reservations set r_status='1' where r_id='$id'";
    $q=mysqli_query($dbcon,$update);
    if($q){
        header('Location:loadingudap.html');
    }else{
        echo 'ไม่สามารถอัพเดทข้อมูลได้';
    }

?>