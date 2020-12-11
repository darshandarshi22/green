<html>
<body>
<?php

$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysql_error($dbh));
$sql="DELETE FROM customer WHERE c_id='$_GET[c_id]'";
if(mysqli_query($dbh,$sql))
header("refresh:1;url=retrievecustomer.php");
else
echo "not deleted";
?>
<h3>deleted successfully</h3>

</body>
</html>