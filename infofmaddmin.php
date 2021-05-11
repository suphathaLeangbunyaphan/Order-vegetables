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
 .box{
  
  margin-top:2%;
  font-family: "Comic Sans MS", cursive, sans-serif;
font-size:70%;
color: #19633a;
}
.box1{
   
    margin-left:15%;
    margin-top:2%;
    width:30%;
    float:left;
    font-family: "Comic Sans MS", cursive, sans-serif;
    color: #4d986f;
}
.box2{
    margin-left:10%;
    margin-top:2%;
    width:30%;
    float:left;
    font-family: "Comic Sans MS", cursive, sans-serif;
    color: #4d986f;

}
.b{
    border-radius:9px;
    width:100%;
    height:4%;
    font-size:19px;
    
}
.s{
    
}
h1{
   

}
.submit{
    color:whitesmoke;
    border-radius: 9px ;
    height: 7%;
    width:50%;
    background-color:rgb(0, 139, 253);   
    border-style:none;
    font-family: Dosis;
    font-size:15px;
    margin-top:10%;
   
    
    
}
.submit:hover{
    background-color:rgb(3, 103, 186);   

}
.ch{
    width:4%;
}
.hin{
    font-size:100%;
    color: #19633a;
    margin-top:3%;
    margin-left:43%;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 20%;
  
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 1px;
  font-size:20%;
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
.ta{
    width:20%;
    margin-left:0%;
}.topnav {
  display:none;
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
  }}
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
 .box{
  
  margin-top:2%;
  font-family: "Comic Sans MS", cursive, sans-serif;
font-size:70%;
color: #19633a;
}
.box1{
   
    margin-left:35%;
    margin-top:2%;
    width:15%;
    float:left;
    font-family: "Comic Sans MS", cursive, sans-serif;
    color: #4d986f;
}
.box2{
    margin-left:2%;
    margin-top:2%;
    width:15%;
    float:left;
    font-family: "Comic Sans MS", cursive, sans-serif;
    color: #4d986f;

}
.b{
    border-radius:9px;
    width:100%;
    height:4%;
    font-size:19px;
    
}
.s{
    margin-top:34%;
}
h1{
   

}
.submit{
    color:whitesmoke;
    border-radius: 9px ;
    height: 7%;
    width:20%;
    background-color:rgb(0, 139, 253);   
    border-style:none;
    font-family: Dosis;
    font-size:15px;
    margin-top:0%;
    
}
.submit:hover{
    background-color:rgb(3, 103, 186);   

}
.ch{
    width:4%;
}
.hin{
    font-size:200%;
    color: #19633a;
    margin-top:3%;
    margin-left:43%;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
.ta{
    width:80%;
    margin-left:9%;
}}}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="admin.php" >หน้าแรก</a>
  <a href="infofmaddmin.php" class="active">จัดการเกษตรกร</a>
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
<div class="box">
    <center><h1>เพิ่มเกษตรกร</h1></center>
    </div>
    <div class="box1">
    <form action="registerfm.php" method="POST" enctype="multipart/form-data">
 
    รหัสบัตรประชาชน:<br><input class="b"type="text" name="idcard" maxlength="13" autofocus required><br>
    ชื่อ:<br><input class="b"type="text" name="name" required><br>
    นามสกุล:<br><input type="text" class="b" name="lastname" required><br>
    อีเมล:<br><input type="text" class="b" name="mail" placeholder="example@gmail.com" required><br>
    โทรศัพท์:<br><input type="text" class="b" name="phone" maxlength="10" required><br>
    ชื่อผู้ใช้งาน:<br><input type="text" class="b" name="username" required><br>
    รหัสผ่าน:<br><input type="password"  class="b" name="password" id="myInput" required>  <br> 
    <input class="ch" type="checkbox" onclick="myFunction()">Show Password
    <script>
            function myFunction() {
              var x = document.getElementById("myInput");
              if (x.type === "password") {
                x.type = "text";
              } else {
                x.type = "password";
              }
            }
            </script>

</div>
   <div class="box2">
        บ้านเลขที่:<br><input type="text" name="numb"  class="b" required><br>
        หมู่:<br><input type="text" name="swine" class="b" required><br>
        ตำบล:<br><input type="text" name="district" class="b" required><br>
        อำเภอ:<br><input type="text" name="canton" class="b" required><br>
        จังหวัด:<br><input type="text" name="county" class="b" required><br>
        รหัสไปรษณีย์:<br><input type="text" name="postcode" maxlength="5" class="b" required><br>
        ภาพ:<br> <input type="file" name="image" class="b" required><br><br>

   </div>
   

<div class="s">
<div class="clear"></div>
<center>
        <input type="submit" class="submit" value="เพิ่มเกษตรกร">
        </center>
</div>
    </form>
    <div class="infofm">
<div class="hin">รายชื่อเกษตรกร</div>
        </div>
        <div class="ta">
        <table id="customers">
  <tr>
    <th>รหัสบัตรประชาชน</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>อีเมล</th>
    <th>เบอร์โทรศัพท์</th>
    <th>ที่อยู่</th>
    <th>ภาพ</th>
    <th>แก้ไข</th>
    <th>ลบ</th>
  </tr>
<?php $select="select*from user where u_status='2'";
       $q=mysqli_query($dbcon,$select);
       while($info=mysqli_fetch_array($q,MYSQLI_ASSOC)){
           $idd=$info['u_idcard'];
           $selecta="select*from address where u_idcard='$idd'";
           $qa=mysqli_query($dbcon,$selecta);

        $infoa=mysqli_fetch_array($qa,MYSQLI_ASSOC)
?>
  <tr>
    <td><?php echo $info['u_idcard'];?></td>
    <td><?php echo $info['u_name'];?></td>
    <td><?php echo $info['u_lastname'];?></td>
    <td><?php echo $info['u_mail'];?></td>
    <td><?php echo $info['u_phone'];?></td>
    <td>บ้านเลขที่&nbsp; <?php echo $infoa['a_numb'];?>&nbsp;หมู่&nbsp;<?php echo $infoa['a_swine'];?>&nbsp;ตำบล&nbsp; <?php echo $infoa['a_district'];?>&nbsp;อำเภอ&nbsp;<?php echo $infoa['a_canton'];?>&nbsp;จังหวัด&nbsp; <?php echo $infoa['a_county'];?>&nbsp;รหัสไปรษณีย์&nbsp;<?php echo $infoa['a_postcode'];?></td>
    <td><center><img src="im_user/<?php echo $info['u_image'];?>" width="50%" ></center></td>
    <td><a href="updateuserfm.php?id=<?php echo $info['u_idcard'];?>"><button > แก้ไข</button></a></td> 
    <td><a href="deletefm.php?id=<?php echo $info['u_idcard'];?>"><button >ลบ</button></a></td>  </tr>
 
        <?php } ?>
</table>

        </div>
</body>
</html>