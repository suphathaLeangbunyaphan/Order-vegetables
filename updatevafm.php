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
</style>
</head>
<body>
<nav class="navigation">
    <ul class="menu">
      <li class="menu__item">
        <a href="fm.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="????????????">
              ????????????
            </span>
            <span class="menu__second-word" data-hover="?????????">
              ?????????
            </span>
          </span>
        </a>
      </li>
  
  
      <li class="menu__item">
        <a href="edtifmfm.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="???????????????">
             ???????????????
            </span>
            <span class="menu__second-word" data-hover="???????????????????????????????????????">
              ???????????????????????????????????????
            </span>
          </span>
        </a>
      </li>
      <li class="menu__item">
        <a href="editva.php" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="??????????????????">
              ??????????????????
            </span>
            <span class="menu__second-word" data-hover="?????????????????????">
              ?????????????????????
            </span>
          </span>
        </a>
      </li>

  
     
      
  
      <li class="menu__item">
        <a href="loadinglogout.html" class="menu__link">
          <span class="menu__title">
            <span class="menu__first-word" data-hover="??????????????????">
              ??????????????????
            </span>
            <span class="menu__second-word" data-hover="????????????">
              ????????????
            </span>
          </span>
        </a>
      </li>
    </ul>
</nav>

<div class="clear"></div>
<div class="box">
    <center><h1>??????????????????????????????????????????????????????</h1></center>
    </div>
    <div class="box1">
    <form action="upvaphpfm.php" method="POST" enctype="multipart/form-data">
 <?php  $id=$_POST['id'];
 $svv="select*from salad where s_id='$id'";
 $qsvv=mysqli_query($dbcon,$svv);
$iqs=mysqli_fetch_array($qsvv,MYSQLI_ASSOC);
 ?>
    ?????????????????????????????????:<br><input class="b"type="text" name="name" value="<?php echo $iqs['s_name'];?>" required><br>
    ???????????????(???????????????????????????????????????????????????):<br><input type="text" class="b" name="q" value="<?php echo $iqs['s_quantity'];?>"required><br>
    ????????????:<br><input type="text" class="b" name="price" value="<?php echo $iqs['s_price'];?>"  required><br>
    
</div>
   <div class="box2">
        ?????????????????????????????????:<br><input type="date" name="date" value="<?php echo $iqs['s_datebegin'];?>" class="b" required><br>
       
        ?????????:<br> <input type="file" name="image" class="b" ><br><br>

   </div>
   

<div class="s">

<center>
        <input type="submit" class="submit" value="???????????????"><input type="hidden" name="id" value="<?php echo $id=$_POST['id'];?>">
        </center>
</div>
</form>
    <div class="infofm">
<div class="hin">?????????????????????</div>
        </div>
        <div class="ta">
        <table id="customers">
  <tr>
    <th>????????????</th>
    <th>?????????????????????????????????</th>
    <th>???????????????</th>
    <th>????????????</th>
    <th>?????????????????????????????????</th>
    <th>?????????</th>
    <th>???????????????</th>
    <th>??????</th>
  </tr>
<?php $select="select*from salad ";
       $q=mysqli_query($dbcon,$select);
       while($info=mysqli_fetch_array($q,MYSQLI_ASSOC)){
?>
  <tr>
    <td><?php echo $info['s_id'];?></td>
    <td><?php echo $info['s_name'];?></td>
    <td><?php echo $info['s_quantity'].'&nbsp;????????????????????????';?> </td>
    <td><?php echo $info['s_price'].'&nbsp;?????????/??????.';?></td>
    
    <td><?php echo $info['s_datebegin'];?></td>
    <td><center><img src="im_va/<?php echo $info['s_image'];?>" width="20%" ></center></td>
    <td><form method="post" action="updatevafm.php"><input type="submit" value="???????????????"><input type="hidden" name="id" value="<?php echo $info['s_id'];?>"></form></a></td> 
    <td><form method="post" action="deletevafm.php"><input type="submit" value="??????"><input type="hidden" name="id" value="<?php echo $info['s_id'];?>"></form></a></td> 
 </tr>
 
        <? } ?>
</table>

        </div>
</body>
</html>