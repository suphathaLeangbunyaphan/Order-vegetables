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

 .cc{
   display:none;
 }
      
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
   display:none;
  overflow: hidden;
  background-color: rgb(227, 227, 227);
  border-radius:20px;
 
}
.box{
  margin-top:1%;
  font-family: "Comic Sans MS", cursive, sans-serif;

}
.box1{
    color:rgb(54, 187, 54);
    margin-left:10%;
    margin-top:2%;
    width:30%;

    float:left;
    font-family: "Comic Sans MS", cursive, sans-serif;
}
.box2{
    color:rgb(54, 187, 54);
    margin-left:5%;
    margin-top:2%;
    width:40%;
    float:left;
    font-family: "Comic Sans MS", cursive, sans-serif;

}
.b{
    border-radius:9px;
    width:100%;
    height:4%;
    font-size:19px;
   
}
.s{
    margin-left:35%;
    margin-top:1%;
    width:30%;
}
h1{
   

}
.submit{
    color:whitesmoke;
    border-radius: 9px ;
    height: 7%;
    width:70%;
    background-color:rgb(0, 139, 253);   
    border-style:none;
    font-family: Dosis;
    font-size:20px;
    
}
.submit:hover{
    background-color:rgb(3, 103, 186);   

}
.ch{
  display:none;
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
  font-size:20px;
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
.box{
  margin-top:1%;
  font-family: "Comic Sans MS", cursive, sans-serif;

}
.box1{
    color:rgb(54, 187, 54);
    margin-left:33%;
    margin-top:2%;
    width:14%;

    float:left;
    font-family: "Comic Sans MS", cursive, sans-serif;
}
.box2{
    color:rgb(54, 187, 54);
    margin-left:5%;
    margin-top:2%;
    width:15%;
    float:left;
    font-family: "Comic Sans MS", cursive, sans-serif;

}
.b{
    border-radius:9px;
    width:100%;
    height:4%;
    font-size:19px;
   
}
.s{
    margin-left:35%;
    margin-top:1%;
    width:30%;
}
h1{
   

}
.submit{
    color:whitesmoke;
    border-radius: 9px ;
    height: 7%;
    width:40%;
    background-color:rgb(0, 139, 253);   
    border-style:none;
    font-family: Dosis;
    font-size:25px;
    
}
.submit:hover{
    background-color:rgb(3, 103, 186);   

}
.ch{
   margin-left:1%;
   display:block;
}
.cc{
  display:block;
  float:left;
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
        แก้ไขข้อมูลส่วนตัว
       </div>
      
        <?php 
      
        $id=$_SESSION['id'];
        $select="select * from user where u_idcard='$id'";
        $q=mysqli_query($dbcon,$select);
       $info=mysqli_fetch_array($q,MYSQLI_ASSOC);
       $selecta="select * from address where u_idcard='$id'";
        $qa=mysqli_query($dbcon,$selecta);
       $infoa=mysqli_fetch_array($qa,MYSQLI_ASSOC);
       $pass=$_SESSION['password'];
        ?>
        
          <div class="clear"></div>
          <div class="box">
    
    </div>
    <div class="box1">
    <form action="updateuser.php" method="POST" enctype="multipart/form-data">
 
    รหัสบัตรประชาชน:<br><input class="b"type="text" name="idcard" maxlength="13" value="<?php echo $info['u_idcard']; ?>" disabled autofocus required><br>
    ชื่อ:<br><input class="b"type="text" name="name" value="<?php echo $info['u_name']; ?>" required><br>
    นามสกุล:<br><input type="text" class="b" name="lastname" value="<?php echo $info['u_lastname']; ?>" required><br>
    อีเมล:<br><input type="text" class="b" name="mail" placeholder="example@gmail.com" value="<?php echo $info['u_mail']; ?>"  required><br>
    โทรศัพท์:<br><input type="text" class="b" name="phone" maxlength="10" value="<?php echo $info['u_phone']; ?>" required><br>
    ชื่อผู้ใช้งาน:<br><input type="text" class="b" name="username" value="<?php echo $info['u_username']; ?>" required><br>
    รหัสผ่าน:<br><input type="password"  class="b" name="password" id="myInput" value="<?php echo $pass ?>"  required>  <br> 
    <input class="ch" type="checkbox" onclick="myFunction()" ><div class="cc">show password</div>
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
        บ้านเลขที่:<br><input type="text" name="numb"  class="b" value="<?php echo $infoa['a_numb']; ?>" required><br>
        หมู่:<br><input type="text" name="swine" class="b" value="<?php echo $infoa['a_swine']; ?>"  required><br>
        ตำบล:<br><input type="text" name="district" class="b" value="<?php echo $infoa['a_district']; ?>"  required><br>
        อำเภอ:<br><input type="text" name="canton" class="b" value="<?php echo $infoa['a_canton']; ?>" required><br>
        จังหวัด:<br><input type="text" name="county" class="b" value="<?php echo $infoa['a_county']; ?>" required><br>
        รหัสไปรษณีย์:<br><input type="text" name="postcode" maxlength="5" value="<?php echo $infoa['a_postcode']; ?>"  class="b" required><br>
        ภาพ:<br> <input type="file" name="image" class="b" ><br><br>

   </div>
   
<div class="clear"></div>
<div class="s">

<center>
        <input type="submit" class="submit" value="แก้ไข">
        </center>
</div>
   

    </form>

          
</body>
</html>