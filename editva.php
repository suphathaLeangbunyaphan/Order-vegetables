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
 .box{
  
  margin-top:2%;
  font-family: "Comic Sans MS", cursive, sans-serif;
font-size:70%;
color: #19633a;
}
.box1{
   
    margin-left:10%;
    margin-top:2%;
    width:35%;
    float:left;
    font-family: "Comic Sans MS", cursive, sans-serif;
    color: #4d986f;
}
.box2{
    margin-left:2%;
    margin-top:2%;
    width:45%;
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
    margin-top:20%;
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
    margin-left:47%;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
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
.ta{
    width:80%;
    margin-left:2%;
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
    margin-top:20%;
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
    margin-left:47%;
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
<?php $id= $_SESSION['id'];
        $select="select * from user where u_idcard='$id'";
        $q=mysqli_query($dbcon,$select);
        $info=mysqli_fetch_array($q,MYSQLI_ASSOC);
?>
<div class="clear"></div>
<div class="box">
    <center><h1>เพิ่มผักสลัด</h1></center>
    </div>
    <div class="box1">
    <form action="addvafm.php" method="POST" enctype="multipart/form-data">
 
    ชื่อผักสลัด:<br><input class="b"type="text" name="name" required><br>
    จำนวน(หน่วยเป็นกิโลกรัม):<br><input type="text" class="b" name="q" required><br>
    ราคา:<br><input type="text" class="b" name="price"  required><br>
    
</div>
   <div class="box2">
        วันที่เริ่ม:<br><input type="date" name="date"  class="b" required><br>
       
        ภาพ:<br> <input type="file" name="image" class="b" required><br><br>

   </div>
   

<div class="s">

<center>
        <input type="submit" class="submit" value="เพิ่มผักสลัด">
        </center>
</div>
    </form>
    <div class="infofm">
<div class="hin">ผักสลัด</div>
        </div>
        <div class="ta">
        <table id="customers">
  <tr>
    <th>รหัส</th>
    <th>ชื่อผักสลัด</th>
    <th>จำนวน</th>
    <th>ราคา</th>
    <th>วันที่เริ่ม</th>
    <th>ภาพ</th>
    <th>แก้ไข</th>
    <th>ลบ</th>
  </tr>
<?php $select="select*from salad ";
       $q=mysqli_query($dbcon,$select);
       while($info=mysqli_fetch_array($q,MYSQLI_ASSOC)){
?>
  <tr>
    <td><?php echo $info['s_id'];?></td>
    <td><?php echo $info['s_name'];?></td>
    <td><?php echo $info['s_quantity'].'&nbsp;กิโลกรัม';?> </td>
    <td><?php echo $info['s_price'].'&nbsp;บาท/กก.';?></td>
    
    <td><?php echo $info['s_datebegin'];?></td>
    <td><center><img src="im_va/<?php echo $info['s_image'];?>" width="20%" ></center></td>
    <td><form method="post" action="updatevafm.php"><input type="submit" value="แก้ไข"><input type="hidden" name="id" value="<?php echo $info['s_id'];?>"></form></a></td> 
    <td><form method="post" action="deletevafm.php"><input type="submit" value="ลบ"><input type="hidden" name="id" value="<?php echo $info['s_id'];?>"></form></a></td> 
 </tr>
 
        <? } ?>
</table>

        </div>
</body>
</html>