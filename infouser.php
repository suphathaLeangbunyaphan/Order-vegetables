<?php 
  require 'connect.php';
  session_start();
  ?>
<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        
        
@media only screen and (min-width: 200px) {

 
      
 body {
   
   align-items: center;
  
   background: #fefefe;
 }
 
 a {
   outline: 0;
   text-decoration: none;
 }
 
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
   max-width: 1000px;
   margin: 0 auto;
   padding-left: 0;
   font-size:100%;
   
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
   font-size:100%;
   
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
.profile{
  font-size:150%;
  text-align:center;
  margin-top:3%;
  color:#0c8040;
}
.t{
  margin-left:15%;
  margin-top:2%;
  float:left;
  border-collapse: collapse;
 font-size:70%;

}
.tt{
  float:left;
  margin-top:2%;
  margin-left:10%;
  border-collapse: collapse;
  font-size:70%;
}
.infof{
  background-color:red;
  width:100%;
}
th{
  border: 1px solid #ddd;
  padding: 8px;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

  #user tr:nth-child(even){
    background-color: #f2f2f2;
    width:100%;
    
    }
.ch{
  background-color:rgb(112, 146, 102);
  width:20%;
  height:7%;
  border-radius:10px;
  font-size:10px;
  border:none;
  margin-left:40%;
  margin-top:3%;
  color:white;
}
.ch:hover{
  background-color:rgb(106, 243, 64);
  color:black;
}
.img{
  border-radius:90%;
  width:35%;
  height:30%;
  margin-top:2%;
  margin-left:30%;
 
  
}
}
@media only screen and (min-width: 600px) {

 
      
 body {
   
   align-items: center;
  
   background: #fefefe;
 }
 
 a {
   outline: 0;
   text-decoration: none;
 }
 
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
 .username{
   background-color:red;
   width:10%;
   float: right;
 }
.img{
  border-radius:90%;
  width:18%;
  height:30%;
  margin-top:2%;
  margin-left:40%;
 
  
}
.clear{
  clear:both;
}
.profile{
  font-size:200%;
  text-align:center;
  margin-top:3%;
  color:#0c8040;
}
.t{
  margin-left:33%;
  margin-top:2%;
  float:left;
  border-collapse: collapse;
 font-size:100%;

}
.tt{
  float:left;
  margin-top:2%;
  margin-left:10%;
  border-collapse: collapse;
  font-size:100%;
}
.infof{
  background-color:red;
  width:100%;
}
th{
  border: 1px solid #ddd;
  padding: 8px;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

  #user tr:nth-child(even){
    background-color: #f2f2f2;
    width:100%;
    
    }
.ch{
  background-color:rgb(112, 146, 102);
  width:10%;
  height:6%;
  border-radius:20px;
  font-size:20px;
  border:none;
  margin-left:45%;
  margin-top:3%;
  color:white;
}
.ch:hover{
  background-color:rgb(106, 243, 64);
  color:black;
}
.test{
  margin-top:100%;
}
.topnav{
  display:none;
}
}

        </style>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="user.php" >หน้าแรก</a>
  <a href="howr.php" >วิธีการจอง</a>
  <a href="infova.html">ความรู้เกี่ยวกับผัก</a>
  <a href="re.php">จองผักสลัด</a>
  <a href="infouser.php" class="active">ข้อมูลผู้ใช้งาน</a>
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
        <a href="user.php" class="menu__link">
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
        <a href="howr.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="วิธี">
              วิธี
            </span>
            <span class="menu__second-word" data-hover="การจอง">
              การจอง
            </span>
          </span>
        </a>
      </li>
  
      <li class="menu__item">
        <a href="infova.html" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="ความรู้">
             ความรู้
            </span>
            <span class="menu__second-word" data-hover="เกี่ยวกับผัก">
              เกี่ยวกับผัก
            </span>
          </span>
        </a>
      </li>
  
      <li class="menu__item">
        <a href="re.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="จอง">
             จอง
            </span>
            <span class="menu__second-word" data-hover="ผักสลัด">
              ผักสลัด
            </span>
          </span>
        </a>
      </li>
  
      <li class="menu__item">
        <a href="infouser.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="ข้อมูล">
              ข้อมูล
            </span>
            <span class="menu__second-word" data-hover="ผู้ใช้งาน">
              ผู้ใช้งาน
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
       <div class="profile">
        ประวัติส่วนตัว
       </div>
       <div class="info">
        <?php 
      
        $id=$_SESSION['id'];
        $select="select * from user where u_idcard='$id'";
        $q=mysqli_query($dbcon,$select);
       $info=mysqli_fetch_array($q,MYSQLI_ASSOC);
        ?>
        <img class="img" src="im_user/<?php echo $info['u_image'] ?>">
        <div class="clear"></div>
        
        <table class="t" id="user">
            <tr>
                <th>รหัสบัตรประชาชน</th>
                <td><?php echo $info['u_idcard'] ?></td>
        </tr>
        <tr>
                <th>ชื่อ</th>
                <td><?php echo $info['u_name'] ?></td>
        </tr>
        <tr>
                <th>นามสกุล</th>
                <td><?php echo $info['u_lastname'] ?></td>
        </tr>
        <tr>
                <th>อีเมล</th>
                <td><?php echo $info['u_mail'] ?></td>
        </tr>
        <tr>
                <th>เบอร์โทร</th>
                <td><?php echo $info['u_phone'] ?></td>
        </tr>
        <tr>
                <th>ชื่อผู้ใช้งาน</th>
                <td><?php echo $info['u_username'] ?></td>
        </tr>
        </table>

        <?php $selecta="select * from address where u_idcard='$id'";
              $qa=mysqli_query($dbcon,$selecta);
              $infoa=mysqli_fetch_array($qa,MYSQLI_ASSOC);
        ?>
        <table class="tt" id="user">
          <tr>
                <th>บ้านเลขที่ </th>
                <td> <?php echo $infoa['a_numb'];?></td>
          </tr>
          <tr>
                <th> หมู่</th>
                <td> <?php echo $infoa['a_swine'];?></td>
          </tr>
          <tr>
                <th>ตำบล </th>
                <td><?php echo $infoa['a_district'];?> </td>
          </tr>
          <tr>
                <th>อำเภอ </th>
                <td> <?php echo $infoa['a_canton'];?></td>
          </tr>
          <tr>
                <th> จังหวัด</th>
                <td> <?php echo $infoa['a_county'];?></td>
          </tr>
          <tr>
                <th>เลขไปรษณีย์</th>
                <td><?php echo $infoa['a_postcode'];?> </td>
          </tr>
        </table>
            
        <div class="clear"></div>
        </div>
        
        <a href="updateuserform.php?id=<?php echo $info['u_idcard'];?>"><input class="ch" type="submit" value="แก้ไขข้อมูลผู้ใช้"></a>
        
          <div class="clear"></div>
          
          
</body>
</html>