<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <?php session_start();
    require 'connect.php';
    ?>
    <style>
       
        @media only screen and (min-width:200px) {
          .slideshow-container {
  
  position: relative;
  float:left;
 }
 .dot {
   height: 15px;
   width: 15px;
   margin: 0 2px;
   background-color: #bbb;
   border-radius: 50%;
   display:none;
   transition: background-color 0.6s ease;
 }
 
 .active {
   background-color: #717171;
 }
 .sli{
    margin-top:5%;
    margin-left:20%;
    width:60%;
    height:30%;
    font-family: Impact	;
    float:left;
    
 }
 .picture{
    box-shadow: 5px 5px 10px 10px ;
    border-radius:5px;
    width:100%;
    height: 100%;
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
   width: 1150px;
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
 .news{
  
   margin-left:15%;
  font-size:70%;
   width:40%;
   height:40%;
   color:#0c8040;
   float:left;
 }
 .vdo{
   width:100%;
   height: 60%;
   
   float:left;
 }
 .nn{
  margin-top:5%;
   float:left;
   width:60%;
   margin-left:15%;
   color:rgb(2, 58, 2);
   font-size:40%;
 }
 .h{
   color:#0c8040;
   font-size:70%;
 }
 .imv{
   margin-top:6%;
   margin-left:5%;
   width:25%;
   height:25%;
   float:left;
   border-radius:20px;
 }
 .clear{
   clear:both;
 }
 .immm{
   width:50%;
   height:25%;
   border-radius:10px;
   margin-left:25%;
  
 }
 .nnn{
   margin-top:2%;
   float:left;
   width:60%;
   margin-left:15%;
   color:rgb(2, 58, 2);
   font-size:50%;
   
 }
 .line{
   background-color:rgb(213, 213, 213);
   width:100%;
   height:.5%;
   margin-top:19%;
 }
 .cr{
   background-color:rgb(243, 255, 243);
   width:100%;
   height:20%;
   margin-top:.5%;
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
        @media only screen and (min-width: 600px) {
         
  .slideshow-container {
  
  position: relative;
  float:left;
 }
 .dot {
   height: 15px;
   width: 15px;
   margin: 0 2px;
   background-color: #bbb;
   border-radius: 50%;
   display:none;
   transition: background-color 0.6s ease;
 }
 
 .active {
   background-color: #717171;
 }
 .sli{
    margin-top:3%;
    margin-left:20%;
    width:60%;
    height:50%;
    font-family: Impact	;
    float:left;
    
 }
 .picture{
    box-shadow: 5px 5px 10px 10px ;
    border-radius:5px;
    width:100%;
    height: 100%;
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
 .news{
  
   margin-left:15%;
  font-size:150%;
   width:40%;
   height:40%;
   color:#0c8040;
   float:left;
 }
 .vdo{
   width:100%;
   height: 100%;
   border-radius:40px;
   float:left;
 }
 .nn{
  margin-top:5%;
   float:left;
   width:60%;
   margin-left:15%;
   color:rgb(2, 58, 2);
   font-size:150%;
 }
 .h{
   color:#0c8040;
   font-size:100%;
 }
 .imv{
   margin-top:4%;
   margin-left:5%;
   width:25%;
   height:50%;
   float:left;
   border-radius:20px;
 }
 .clear{
   clear:both;
 }
 .immm{
   width:50%;
   height:50%;
   border-radius:10px;
   margin-left:25%;
   margin-top:3%;
 }
 .nnn{
   margin-top:2%;
   float:left;
   width:60%;
   margin-left:15%;
   color:rgb(2, 58, 2);
   font-size:150%;
 }
 .line{
   background-color:rgb(213, 213, 213);
   width:100%;
   height:.5%;
   margin-top:15%;
 }
 .cr{
   background-color:rgb(243, 255, 243);
   width:100%;
   height:30%;
   margin-top:.5%;
 }
.topnav{
  display:none;
}
        }
        </style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="user.php" class="active">หน้าแรก</a>
  <a href="howr.php">วิธีการจอง</a>
  <a href="infova.html">ความรู้เกี่ยวกับผัก</a>
  <a href="re.php">จองผักสลัด</a>
  <a href="infouser.php">ข้อมูลผู้ใช้งาน</a>
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
        <div class="sli">
                
                <div class="slideshow-container">
                    
                <div class="mySlides fade">
                  <img class="picture" src="photo/photo-1529303906282-705ca092db6f.jpg" >
                </div>
                
                <div class="mySlides fade">
                  <img class="picture" src="photo/photo-1506358332807-7a25096ebd09.jpg" >
                </div>
                
                <div class="mySlides fade">
                  <img class="picture" src="photo/photo-1495812911089-ac29f92223d1.jpg" >
                </div>
                <div class="mySlides fade">
                  <img class="picture"  src="photo/photo-1535090467336-9501f96eef89.jpg" >
                </div>
                <div class="mySlides fade">
                  <img class="picture" src="photo/photo-1466692476868-aef1dfb1e735.jpg" >
                </div>
               
                </div>
                
                
                
                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
                </div>
                <br><br>
                <script>
                var slideIndex = 0;
                showSlides();
                
                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                       slides[i].style.display = "none";  
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {slideIndex = 1}    
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";
                    setTimeout(showSlides, 3000); // Change image every 2 seconds
                }
                </script>
                   <div class="nn">
                     <h3 class="h">สาระน่ารู้</h3>
                    ประโยชน์ของผักใบเขียว
  สารสีเขียวในพืชผักต่างๆ นั้น อุดมไปด้วยสาร “คลอโรฟิลด์” และมี “ไฟเบอร์” สูง ซึ่งมีประโยชน์เป็นอย่างมาก เช่น มีคุณสมบัติในการต่อต้านการเกิดมะเร็ง ช่วยให้เซลล์ทำงานดีขึ้น ช่วยในเรื่องของการขับถ่าย กำจัดสารพิษตกค้างในร่างกาย และยังช่วยลดอาการภูมิแพ้ต่างๆ ได้เป็นอย่างดีอีกด้วย
                  </div>
                <div class="news">
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3 class="h">ข่าว</h3>
                  <video class="vdo" width="320" height="100" controls>
                    <source src="vdo/news.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                  </video>
                  <div class="clear"></div>
                </div>
                <img class="imv" src="photo/photo-1518994603110-1912b3272afd.jpeg">
                <img class="immm" src="photo/photo-1466692476868-aef1dfb1e735.jpg">
<div class="nnn">การปลูกพืชแบบไฮโดรโปนิกส์ กำลังเป็นที่นิยมในเมืองไทย ในปัจจุบันจะเห็นได้ว่าธุรกิจการปลูกพืชแบบไฮโดรโปนิกส์หรือการปลูกพืชโดยไม่ใช้ดินในประเทศไทยกำลังเติบโตอย่างรวดเร็ว สามารถพบเห็นผลิตภัณฑ์จากไฮโดรโปนิกส์ส่วนหนึ่งวางจำหน่ายอยู่ในห้างสรรพสินค้าทั่วไปในโซนขายผักปลอดสารพิษ</div>
<div class="line"></div>
<div class="cr"></div>
</body>
</html>