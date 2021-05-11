<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>

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
 .box{
  
  margin-top:10%;
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
    margin-left:6%;
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
    margin-top:2%;
}
.clear{
    clear:both;
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
    
}
.submit:hover{
    background-color:rgb(3, 103, 186);   

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
    margin-top:3%;
}
.clear{
    clear:both;
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
    
}
.submit:hover{
    background-color:rgb(3, 103, 186);   

}
    }
</style>
</head>
<body>
<nav class="navigation">
    <ul class="menu">
      <li class="menu__item">
        <a href="fm.php" class="menu__link">
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
        <a href="edtifmfm.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="แก้ไข">
             แก้ไข
            </span>
            <span class="menu__second-word" data-hover="ข้อมูลเกษตรกร">
              ข้อมูลเกษตรกร
            </span>
          </span>
        </a>
      </li>
      <li class="menu__item">
        <a href="editva.php" class="menu__link">
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
    <center><h1>แก้ไขข้อมูลเกษตรกร</h1></center>
    </div>
<?php 
$idu=$_SESSION['id'];
        $selectu="select*from user where u_idcard='$idu'";
        $qu=mysqli_query($dbcon,$selectu);
        $infou=mysqli_fetch_array($qu,MYSQLI_ASSOC);
        $salt='fjdiwkdisoalsldkfidkfladfaeiiaoolccc';
        $password=$infou['u_password'];
    $hash_password=hash_hmac('sha256',$password,$salt); ?>

    
    <div class="box1">
    <form action="updatefmself.php" method="POST" enctype="multipart/form-data">
 
    รหัสบัตรประชาชน:<br><input class="b"type="text" name="idcard" value="<?php echo $infou['u_idcard']; ?>"maxlength="13" autofocus disabled required><br>
    ชื่อ:<br><input class="b"type="text" name="name" value="<?php echo $infou['u_name']; ?>" required><br>
    นามสกุล:<br><input type="text" class="b" name="lastname" value="<?php echo $infou['u_lastname']; ?>" required><br>
    อีเมล:<br><input type="text" class="b" name="mail" placeholder="example@gmail.com" value="<?php echo $infou['u_mail']; ?>"required><br>
    โทรศัพท์:<br><input type="text" class="b" name="phone" maxlength="10" value="<?php echo $infou['u_phone']; ?>"required><br>
    ชื่อผู้ใช้งาน:<br><input type="text" class="b" name="username" value="<?php echo $infou['u_username']; ?>"required><br>
    รหัสผ่าน:<br><input type="text" class="b" name="password" value="<?php echo $_SESSION['password']; ?>"required><br>

</div>
<?php 
        $selecta="select*from address where u_idcard='$idu'";
        $qa=mysqli_query($dbcon,$selecta);
        $infoa=mysqli_fetch_array($qa,MYSQLI_ASSOC); ?>
   <div class="box2">
        บ้านเลขที่:<br><input type="text" name="numb" value="<?php echo $infoa['a_numb'];?>" class="b" required><br>
        หมู่:<br><input type="text" name="swine" class="b" value="<?php echo $infoa['a_swine'];?>" required><br>
        ตำบล:<br><input type="text" name="district" class="b" value="<?php echo $infoa['a_district'];?>" required><br>
        อำเภอ:<br><input type="text" name="canton" class="b" value="<?php echo $infoa['a_canton'];?>"required><br>
        จังหวัด:<br><input type="text" name="county" class="b" value="<?php echo $infoa['a_county'];?>" required><br>
        รหัสไปรษณีย์:<br><input type="text" name="postcode" maxlength="5" value="<?php echo $infoa['a_postcode'];?>" class="b" required><br>
        ภาพ:<br> <input type="file" name="image" class="b" ><br><br>

   </div>
<div class="clear"></div>
   <div class="s">

<center>
<input type="hidden" name="idcard" value="<?php echo $infou['u_idcard']; ?>">
        <input type="submit" class="submit" value="แก้ไข">
        </center>
</div>
</body>
</html>