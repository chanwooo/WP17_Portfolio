
<?php
include "header.php";

$q="INSERT INTO intro (title, content) VALUES ('$_GET[title]','$_GET[content]')";
mysqli_query($connect,$q);

echo $q;
echo "<br>";
echo $connect;



?>


