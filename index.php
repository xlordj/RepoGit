<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>

    <script src="../admin/js/jquery-1.4.4.min.js" type="text/javascript"></script>

    <script src="../admin/js/ccvalidate.js" type="text/javascript"></script>

    <link href="../admin/css/ccvalidate.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script src="js/imax.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>

<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>









<?php


if(isset($_SESSION['login']))

{

header('location:accueil_admin.php');

exit();

}

if(isset($_POST['authen']))

{

require_once('./connexion_db/connect_db.php');

$login=$_POST['login'];

$mdp=$_POST['mdp'];

$sql_login="select * from admin where username='$login' and password='$mdp'";

$query_login=mysql_query($sql_login) or die (mysql_error());

$nb=mysql_num_rows($query_login);

if($nb>0)

{

$_SESSION['login']=$login;

header('location:accueil_admin.php');

exit();

}

else

{

echo"Username or password incorrect

<a href='index.php'>TRY AGAIN PLEASE</a><br>";

}

}

else

{

?>

<html>

 </BR>
 <body id="page1">



<!-- header -->
<div class="bg">
  <div class="main">
    <header>
      <div class="row-3">
        <div class="slider-wrapper">
          <div class="slider">
            <ul class="items">
              <li><img src="images/slider-img1.jpg" alt=""> <strong class="banner"> <strong class="b1"><strong class="b2">Protect </strong>yourself and your staff from illness or injury</strong>  <strong class="b3">
             </strong> </strong> </li>
              <li><img src="images/slider-img2.jpg" alt=""> <strong class="banner"> <strong class="b1">our aim is</strong> <strong class="b2">Dedicated</strong> <strong class="b3">To make staff be safe <br>
                the highest standards</strong> </strong> </li>
              <li><img src="images/slider-img3.jpg" alt=""> <strong class="banner"> <strong class="b1">encourage</strong> <strong class="b2">Business</strong> <strong class="b3">Success and growth with our<br>
                professionals of this sphere</strong> </strong> </li>
            </ul>
            <a class="prev" href="#">prev</a> <a class="next" href="#">prev</a> </div>
        </div>
      </div>  
      
    </header>
    <!-- content -->
      <CENTER>		

    <legend>ACCEDER A L'APPLICATION </legend>
    </BR>
<form method="POST" action="index.php" name="form4" >

<table  backgroundcolor="">


<tr>

<td colspan="4" bgcolor="#00a9ff" >LOGIN</td>

<td><input type="text" name="login" colspan="2"></td>
</tr>

<tr>

<td colspan="4" bgcolor="#00a9ff" >PASSWORD</td>

<td><input type="password" name="mdp" colspan="2" ></td>

</tr>

<tr>

<td colspan="8" align="center"><input type="submit" value="SUBMIT" name="authen"></td>

</tr>

</table>

</form>
</CENTER>


<script type="text/javascript">
$(function () {
    $('.slider')._TMS({
        prevBu: '.prev',
        nextBu: '.next',
        playBu: '.play',
        duration: 800,
        easing: 'easeOutQuad',
        preset: 'simpleFade',
        pagination: false,
        slideshow: 3000,
        numStatus: false,
        pauseOnHover: true,
        banners: true,
        waitBannerAnimation: false,
        bannerShow: function (banner) {
            banner.hide().fadeIn(500)
        },
        bannerHide: function (banner) {
            banner.show().fadeOut(500)
        }
    });
})
</script>

 <br>
 <br>
 <br>
 <br>
  <br>
 <br>
 <div class="row-bot">
        <div class="aligncenter">
          <p class="p0">Copyright &copy; JLMAX All Rights Reserved</p>
          Develop & Design by <a  href="mailto:jeanlouismane@live.fr">JLMAX</a><br>
          <!-- {%FOOTER_LINK} -->
        </div>
        </div>
</html>
 















</html>

<?php

}



?>


