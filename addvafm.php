<?php 
    require 'connect.php';
    $name=$_POST['name'];
    $q=$_POST['q'];
    $price=$_POST['price'];
    $date=$_POST['date'];
   
    
    
    $basename=pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
    $newname=uniqid().".jpg";
    $path="im_va/";
    $upload=$path.$newname;
    $resultupload=move_uploaded_file($_FILES['image']['tmp_name'],$upload);
    if($resultupload==false){
        echo "can't uploade file!!!";
        exit();
    }

    
    $insert="insert into salad(s_id,s_name,s_quantity,s_price,s_datebegin,s_image) values ('','$name','$q','$price','$date','$newname')";
    $q=mysqli_query($dbcon,$insert);

    
    if($q){
        header('Location:loadingaddvafm.html');
    }
    
    
?>