<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
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
 .wel{
    
    width:60%;
    height:70%;
   
    margin-top:30%;
    float:left;
 }
 .well{
    color: #5bd592;
     margin-left:30%;
    margin-top:10%;
    font-size:100%;
 }
.name{
    color: #19633a;
    margin-left:30%;
    font-size:100%;
   
}
.pic{
    margin-top:30%;
    
    float:left;
    width:40%;
    height:70%;
}
 .picc{
    border-radius:50%;
    width:60%; 
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
  }
}
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
 .wel{
    
    width:60%;
    height:70%;
   
    margin-top:10%;
    float:left;
 }
 .well{
    color: #5bd592;
     margin-left:30%;
    margin-top:10%;
    font-size:150%;
 }
.name{
    color: #19633a;
    margin-left:30%;
    font-size:300%;
   
}
.pic{
    margin-top:10%;
    
    float:left;
    width:40%;
    height:70%;
}
 .picc{
    border-radius:50%;
    width:40%; 
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
<?php $id= $_SESSION['id'];
        $select="select * from user where u_idcard='$id'";
        $q=mysqli_query($dbcon,$select);
        $info=mysqli_fetch_array($q,MYSQLI_ASSOC);
?>
<div class="clear"></div>
   <div class="wel">

       <div class="well">
           ยินดีต้อนรับผู้ดูแลระบบ
</div>

<div class="name">
    <?php echo $info['u_name']; ?> &nbsp;<?php echo $info['u_lastname'];?>
    
</div>
</div>
<div class="pic">
       <img class="picc" src="im_user/<?php echo $info['u_image']; ?>">

       </div>

</body>
</html>