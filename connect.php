<?php 
    $dbcon=mysqli_connect('localhost','root','','apiwat')or die('can not connect database!!!'.mysqli_connect_errono());
    /*if($dbcon){
        echo "connect database success";
    }else{
        echo "connect databases fail!!!";
    }*/
    mysqli_set_charset($dbcon,'utf8');
?>