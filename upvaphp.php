<?php 
    require 'connect.php';
    session_start();
    $id=$_POST['id'];
    $name=$_POST['name'];
    $q=$_POST['q'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    echo $name .$q .$price .$date,$id;

 

    if($_FILES['image']['error']>0){
       $update="update salad set s_name='$name',s_quantity='$q',s_price='$price',s_datebegin='$date' where s_id='$id'";
        mysqli_query($dbcon,$updatea);
        $result=mysqli_query($dbcon,$update);
    if($result){
        header('Location:loadingupdateva.html');
    }else{
        echo "con not edit!!!".mysqli_error($dbcon);
    }
    }else{
        $select="select s_image from salad where s_id='$id'";
        $qs=mysqli_query($dbcon,$select);
        $infos=mysqli_fetch_array($qs,MYSQLI_ASSOC);
        @unlink('im_va/'.$infos['s_image']);

        $basename=pathinfo(basename($_FILES['image']['name'],PATHINFO_EXTENSION));
        $newname=uniqid().".jpg";
        $path="im_va/";
        $upload=$path.$newname;
        move_uploaded_file($_FILES['image']['tmp_name'],$upload);
        
        $update="update salad set s_name='$name',s_quantity='$q',s_price='$price',s_datebegin='$date',s_image='$newname' where s_id='$id'";
        
        $result=mysqli_query($dbcon,$update);
    if($result){
        header('Location:loadingupdateva.html');
    }else{
        echo "con not edit!!!".mysqli_error($dbcon);
    }
        
    }
    

?>