
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
        <!--a href="login.php" class=" button secondary small">Login</a-->

    </div>



</div>

<form method="POST">
    ID: <input name="id" type="text">
    PW: <input name="pw" type="password">
    <input class="button" type="submit" value="Login">

</form>


</body>
</html>


<?php

session_start();


$connect = mysqli_connect("dream.hust.net", "root", "root@@", "st");
mysqli_set_charset($connect,"utf8");


if(isset($_SESSION['userid']))
{
    echo "이미 로그인 되어있습니다. ";
    echo $_SESSION['userid'];


}


$id=$_POST["id"];
$pw=$_POST["pw"];
echo $id;
echo "<br>";
echo $pw;


//$userid=$_SESSION['userid'];
$query = "select count(*) from users where id='$id' and pw='$pw';";
$result=mysqli_query($connect,$query);

$row=mysqli_fetch_array($result);

//echo $query;

if($row[0]==1) {
    echo "<h3>로그인성공</h3>";
    $_SESSION['userid']=$id;
    header("Location: ./index.php");


}
else
    echo "<h3>로그인하세요</h3>";

//echo $_SESSION["id"]=$id;
/*
    echo "로그인 성공시 <a href='main.php'>main.php</a>로 리다이렉트<br>";

    echo "세션이 존재할경우에도 main.php로 리다이렉트<br>";
*/
?>


