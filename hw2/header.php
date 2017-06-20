<?php

$connect = mysqli_connect("dream.hust.net", "root", "root@@", "st");
mysqli_set_charset($connect,"utf8");

session_start();

if(isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];
}
else
{
//    header("Location: ./");

//    echo "<script>alert('로그인이 필요합니다!'); window.location='./'</script>";
//   echo "need login";

}

$query1="select * from users where id = '$userid' ";

$result=mysqli_query($connect,$query1);
$userinfo=mysqli_fetch_array($result);

$q2= "SELECT * FROM counter";
$result=mysqli_query($connect,$q2);
$c=mysqli_fetch_array($result);

?>


<!doctype html>
<html class="no-js" lang="ko-KR">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="CHANWOO" />
    <meta name="author" content="chanwookim@me.com" />

    <title>chanwoo</title>

    <link rel="stylesheet" href="css/foundation.css" />


</head>
<body>
<div class="title-bar">
    <div class="title-bar-left">

        <!--button class="menu-icon" type="button"></button-->
        <span class="title-bar-title"><h3>CHANWOO</h3></span>
        <?php
        if(isset($_SESSION['userid'])) {
            echo" <a href='logout.php' class=' button secondary small'>Logout</a>";
            echo "Hi! ".$userid;
        }
        else
        {
            echo "<a href='login.php' class=' button secondary small'>Login</a>";

        }
        ?>


    </div>



</div>



<div Class="Row">
    <div style="padding-top: 10px" Class="large-2 medium-2 columns">
        <div class="hide-for-small-only">
            <a class="hollow button secondary expanded" href="index.php">INTRO</a>
            <a class="hollow button secondary expanded" href="portfolio.php">PORTFOLIO</a>
            <a class="hollow button secondary expanded" href="contact.php">CONTACT</a>
            <a class="hollow button secondary expanded">방문자 : <?=$c[0]+1?></a>
            <a class="hollow button secondary expanded" href="rstCounter.php?cnt=0">방문자counter 초기화</a>

        </div>

        <div class="hide-for-medium hide-for-large">
            <ul class="vertical menu" data-accordion-menu>
                <li><a class="hollow button secondary expanded" href="#">MENU</a>
                    <ul class="menu vertical nested">
                        <li><a class="hollow button secondary expanded" href="index.php">INTRO</a></li>
                        <li><a class="hollow button secondary expanded" href="portfolio.php">PORTFOLIO</a></li>
                        <li><a class="hollow button secondary expanded" href="contact.php">CONTACT</a></li>
                    </ul>
            </ul>


        </div>

    </div>

<!--h1>

    <a href="main.php">SE17_전자결재</a>

</h1-->

    <!--
        로그인 완료 후 첫화면<br>
        전체적인 요약 정보 보여줘야함<br>
        <br>
        -->


</h3>





<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/foundation.min.js"></script>
<script>$(document).foundation();</script>
</body>
</html>