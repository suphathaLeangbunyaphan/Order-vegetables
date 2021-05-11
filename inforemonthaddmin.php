<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src='excelexportjs.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php require 'connect.php';
         session_start();
        
?>
    <style>
    @media only screen and (min-width:200px) {
 .navigation {
  display:none;
   width: 100%;
   border-bottom: 3px solid #ccd7d7;
   font-family: 'Pathway Gothic One', sans-serif;
   font-size: 22px;
   float:left;
 }
 
 .menu {
   display: flex;
   justify-content: center;
   width: 1150px;
   margin: 0 auto;
   padding-left: 0;
   font-size:80%;
 }
 
 .menu__item {
   display: inline-block;
   white-space: nowrap;
 }
 
 
 
 .menu__item:last-child .menu__link {
   border-right: 0;
 }
 
 .menu__link {
   display: block;
   padding: 6px 30px 3px;
   border-right: 2px dotted #ccd7d7;
 }
 .menu__link:hover .menu__first-word, .menu__link:focus .menu__first-word {
   transform: translate3d(0, -105%, 0);
 }
 .menu__link:hover .menu__second-word, .menu__link:focus .menu__second-word {
   transform: translate3d(0, 105%, 0);
 }
 
 
 .menu__title {
   display: inline-block;
   overflow: hidden;
 }
 
 .menu__first-word,
 .menu__second-word {
   display: inline-block;
   position: relative;
   transition: transform .3s;
 }
 .menu__first-word::before,
 .menu__second-word::before {
   position: absolute;
   content: attr(data-hover);
 }
 
 .menu__first-word {
   color: #0c8040;
 }
 .menu__first-word::before {
   top: 105%;
   color: #626262;
 }
 
 .menu__second-word {
   color: #626262;
 }
 .menu__second-word::before {
   bottom: 105%;
   color: #0c8040;
 }
 .clear{
     clear:both;
 }
 .modal {
display: none;
position: fixed;
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto;
background-color: rgb(0, 0, 0);
background-color: rgba(0, 0, 0, 0.4);
}

/* Display the modal when targeted */
.modal:target {
display: table;
position: absolute;
}

/* The modal box */
.modal-dialog {
display: table-cell;
vertical-align: middle;
}

/* The modal's content */
.modal-dialog .modal-content {
margin: auto;
background-color: #f3f3f3;
position: relative;
padding: 0;
outline: 0;
border: 1px #777 solid;
text-align: justify;
width: 80%;

box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

/* Add animation */
-webkit-animation-name: example; /* Chrome, Safari, Opera */
-webkit-animation-duration: 0.5s; /* Chrome, Safari, Opera */
animation-name: example;
animation-duration: 0.5s;
}

/* The button used to close the modal */
.closebtn {
text-decoration: none;
float: right;
font-size: 35px;
font-weight: bold;
color: #fff;
}

.closebtn:hover,
.closebtn:focus {
color: #000;
text-decoration: none;
cursor: pointer;
}

.container {
padding: 2px 16px;
color:#366836;
font-size:80%;

}
header {
background-color: #5cb85c;
font-size: 25px;
color: white;
}

footer {
background-color: #5cb85c;
font-size: 20px;
color: white;
}
@-webkit-keyframes example {
from {top:-100px;opacity: 0;}
to {top:0px;opacity:1;}
}

/* Add animation (Standard syntax) */
@keyframes example {
from {top:-100px;opacity: 0;}
to {top:0px;opacity:1;}
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
 
}

#customers td, #customers th {
  border: 1px solid #ddd;
 
  font-size:10%;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
table{
  margin-top:2%;
  margin-left:2%;
  margin-bottom:5%;
}

.ch{
  
  font-size:50%;
  width:40%;
  margin-top:5%;
  margin-left:33%;
}
.sub{
  margin-top:5%;
  margin-left:30%;
  width:40%;
  height:5%;
  background-color:rgb(84, 149, 247);
  border-radius:100px;
  font-size:70%;
}
.sub:hover{
  color:white;
  background-color:rgb(25, 101, 216);
}
.m{
  width:10%;
}
.y{
  width:10%;
}
.imgg{
  margin-left:40%;
  margin-top:10%;
  width:20%;
}
.export{
  font-size:100%;
}
.topnav {
  overflow: hidden;
  background-color: rgb(227, 227, 227);
  border-radius:20px;
 
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  color:black;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;

}

.topnav .icon {
  display: none;
}
.clear{
  clear:both;
}
.bb{
  font-size:10px;
}
.b{
  width:70%;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }}

    }
    @media only screen and (min-width:600px) {
 .navigation {
  display:block;
   width: 100%;
   border-bottom: 3px solid #ccd7d7;
   font-family: 'Pathway Gothic One', sans-serif;
   font-size: 22px;
   float:left;
 }
 
 .menu {
   display: flex;
   justify-content: center;
   width: 1150px;
   margin: 0 auto;
   padding-left: 0;
   font-size:80%;
 }
 
 .menu__item {
   display: inline-block;
   white-space: nowrap;
 }
 
 
 
 .menu__item:last-child .menu__link {
   border-right: 0;
 }
 
 .menu__link {
   display: block;
   padding: 6px 30px 3px;
   border-right: 2px dotted #ccd7d7;
 }
 .menu__link:hover .menu__first-word, .menu__link:focus .menu__first-word {
   transform: translate3d(0, -105%, 0);
 }
 .menu__link:hover .menu__second-word, .menu__link:focus .menu__second-word {
   transform: translate3d(0, 105%, 0);
 }
 
 
 .menu__title {
   display: inline-block;
   overflow: hidden;
 }
 
 .menu__first-word,
 .menu__second-word {
   display: inline-block;
   position: relative;
   transition: transform .3s;
 }
 .menu__first-word::before,
 .menu__second-word::before {
   position: absolute;
   content: attr(data-hover);
 }
 
 .menu__first-word {
   color: #0c8040;
 }
 .menu__first-word::before {
   top: 105%;
   color: #626262;
 }
 
 .menu__second-word {
   color: #626262;
 }
 .menu__second-word::before {
   bottom: 105%;
   color: #0c8040;
 }
 .clear{
     clear:both;
 }
 .modal {
display: none;
position: fixed;
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto;
background-color: rgb(0, 0, 0);
background-color: rgba(0, 0, 0, 0.4);
}

/* Display the modal when targeted */
.modal:target {
display: table;
position: absolute;
}

/* The modal box */
.modal-dialog {
display: table-cell;
vertical-align: middle;
}

/* The modal's content */
.modal-dialog .modal-content {
margin: auto;
background-color: #f3f3f3;
position: relative;
padding: 0;
outline: 0;
border: 1px #777 solid;
text-align: justify;
width: 80%;

box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

/* Add animation */
-webkit-animation-name: example; /* Chrome, Safari, Opera */
-webkit-animation-duration: 0.5s; /* Chrome, Safari, Opera */
animation-name: example;
animation-duration: 0.5s;
}

/* The button used to close the modal */
.closebtn {
text-decoration: none;
float: right;
font-size: 35px;
font-weight: bold;
color: #fff;
}

.closebtn:hover,
.closebtn:focus {
color: #000;
text-decoration: none;
cursor: pointer;
}

.container {
padding: 2px 16px;
color:#366836;
font-size:80%;

}
header {
background-color: #5cb85c;
font-size: 25px;
color: white;
}

footer {
background-color: #5cb85c;
font-size: 20px;
color: white;
}
@-webkit-keyframes example {
from {top:-100px;opacity: 0;}
to {top:0px;opacity:1;}
}

/* Add animation (Standard syntax) */
@keyframes example {
from {top:-100px;opacity: 0;}
to {top:0px;opacity:1;}
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
 
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  font-size:100%;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
table{
  margin-top:2%;
  margin-left:2%;
  margin-bottom:5%;
}

.ch{
  
  font-size:150%;
  width:40%;
  margin-top:5%;
  margin-left:33%;
}
.sub{
  margin-top:5%;
  margin-left:30%;
  width:20%;
  height:5%;
  background-color:rgb(84, 149, 247);
  border-radius:100px;
  font-size:70%;
}
.sub:hover{
  color:white;
  background-color:rgb(25, 101, 216);
}
.m{
  width:10%;
}
.y{
  width:10%;
}
.imgg{
  margin-left:40%;
  margin-top:5%;

}
.export{
  font-size:100%;
}
.topnav{
  display:none;
}
    }
</style>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="admin.php" class="active">หน้าแรก</a>
  <a href="infofmaddmin.php">จัดการเกษตรกร</a>
  <a href="infovaaddmin.php">จัดการผักสลัด</a>
  <a href="inforedayaddmin.php">ข้อมูลออกผักสลัดรายวัน</a>
  <a href="inforemonthaddmin.php">ข้อมูลออกผักสลัดรายเดือน</a>
  <a href="loadinglogout.html">ออกจากระบบ</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<div class="clear"></div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<nav class="navigation">
    <ul class="menu">
      <li class="menu__item">
        <a href="admin.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="หน้า">
              หน้า
            </span>
            <span class="menu__second-word" data-hover="แรก">
              แรก
            </span>
          </span>
        </a>
      </li>
  
  
      <li class="menu__item">
        <a href="infofmaddmin.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="จัดการ">
             จัดการ
            </span>
            <span class="menu__second-word" data-hover="เกษตรกร">
              เกษตรกร
            </span>
          </span>
        </a>
      </li>
      <li class="menu__item">
        <a href="infovaaddmin.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="จัดการ">
              จัดการ
            </span>
            <span class="menu__second-word" data-hover="ผักสลัด">
              ผักสลัด
            </span>
          </span>
        </a>
      </li>
      <li class="menu__item">
        <a href="inforedayaddmin.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="ข้อมูลออก">
            ข้อมูลออก
            </span>
            <span class="menu__second-word" data-hover="รายงานผักสลัดรายวัน">
             รายงานผักสลัดรายวัน
            </span>
          </span>
        </a>
      </li>
  
      <li class="menu__item">
        <a href="inforemonthaddmin.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="ข้อมูล">
            ข้อมูลออก
            </span>
            <span class="menu__second-word" data-hover="รายงานผักสลัดรายเดือน">
            รายงานผักสลัดรายเดือน
            </span>
          </span>
        </a>
      </li>
      
  
      <li class="menu__item">
        <a href="loadinglogout.html" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="ออกจาก">
              ออกจาก
            </span>
            <span class="menu__second-word" data-hover="ระบบ">
              ระบบ
            </span>
          </span>
        </a>
      </li>
    </ul>
</nav>
<div class="clear"></div>
<img class="imgg" src="photo/Address-Book-icon.png" >

<div class="ch">
<form action="#id1" method="post">
  กรุณาเลือกเดือน
<select class="m" name="m">
<?php for($i=1;$i<=12;$i++){ ?>
  <option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
</select>&nbsp;&nbsp;&nbsp;&nbsp;
กรุณาเลือกปี ค.ศ.
<select class="y" name="y">
<?php for($i=2019;$i<=2100;$i++){ ?>
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php } ?>
</select> <br>
<input class="sub" type="submit" value="ค้นหา">
</form>
</div>





  

<div id="id1" class="modal">
<?php 
if(empty($_POST['y'])){
  $y='';
}else{
  $y=$_POST['y'];
}
if(empty($_POST['m'])){
  $m='';
}else{
  $m=$_POST['m'];
}


?>
            <div class="modal-dialog">
              <div class="modal-content">
                <header class="container"> 
                  <a href="#" class="closebtn">×</a>
                  <h2>รายงานข้อมูลผักเดือน <?php echo $m; ?> ปี พ.ศ. <?php echo $y; ?></h2>
                </header>
                <div class="container">
              
<table id="customers">
<tr>
    <th> หมายเลขการจอง</th>
    <th> รหัสบัตรประชาชนผู้จอง</th>
    <th>วันที่จอง </th>
    <th> วันที่รับ</th>
    <th>ราคาทั้งหมด</th>
    <th>ราคาที่ต้องจ่ายก่อน 50 %</th>
    <th>หมายเลขอ้างอิงการโอนเงิน</th>
    <th >สถานะ</th>
</tr>
<?php    $select="select * from reservations where YEAR(r_date)='$y' and MONTH(r_date)='$m'";
  $q=mysqli_query($dbcon,$select);
 while($info=mysqli_fetch_array($q,MYSQLI_ASSOC)){

?>
<tr>
  
  
    
    <td><?php echo $info['r_id']; ?></td>
    <td><?php echo $info['u_idcard']; ?></td>

    <td><?php echo $info['r_date']; ?></td>
    <td><?php echo $info['r_duedate']; ?></td>
    <td><?php echo $info['r_price']; ?></td>
    <td><?php echo $info['r_pricehalf']; ?></td>
    <td><?php echo $info['r_slip_code']; ?></td>
    <td><?php 
    if($info['r_status']==0){
      $status='รอตรวจสอบ';
    }else if($info['r_status']==1){
      $status='อนุมัติ';
    }else{
      $status='ไม่อนุมัติ';
    }
    echo $status; ?></td>
 <?php } ?>
 <br>
 <button id='DLtoExcel' class="export">Export Html Table to Excel</button>
 <script type="text/javascript">
            var $btnDLtoExcel = $('#DLtoExcel');
            $btnDLtoExcel.on('click', function () {
              $("#customers").excelexportjs({
                  containerid: "customers"
                  ,datatype: 'table'
              });
            });
        </script>        
                </div>
                
              </div>
            </div>
          </div>
 
</body>
</html>