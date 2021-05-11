<?php
    require 'connect.php';
    $id=$_POST['id'];

    $select="select s_image from salad where s_id='$id'";
        $qs=mysqli_query($dbcon,$select);
        $infos=mysqli_fetch_array($qs,MYSQLI_ASSOC);
        @unlink('im_va/'.$infos['s_image']);

    $delete="delete from salad where s_id='$id'";
    $result=mysqli_query($dbcon,$delete);
    if($result){
        header("Location:loadingaddvafm.html");
    }else{
        echo "can not delete!!!!".mysqli_error($dbcon);
    }
    mysqli_close($dbcon);
?>