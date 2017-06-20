
<?php
include "header.php";

$q="UPDATE counter SET cnt=$_GET[cnt]";
mysqli_query($connect,$q);

?>





