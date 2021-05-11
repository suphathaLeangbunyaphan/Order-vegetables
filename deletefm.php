<?php
    require 'connect.php';
    $id=$_GET['id'];

    $select="select u_image from user where u_idcard='$id'";
        $qs=mysqli_query($dbcon,$select);
        $infos=mysqli_fetch_array($qs,MYSQLI_ASSOC);
        @unlink('im_user/'.$infos['u_image']);

    $delete="delete from user where u_idcard='$id'";
    $result=mysqli_query($dbcon,$delete);
    if($result){
        header("Location:loadingdlfm.php");
    }else{
        echo "can not delete!!!!".mysqli_error($dbcon);
    }
    mysqli_close($dbcon);
?>