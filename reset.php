<html>
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysql_error($dbh));
$sql="DROP VIEW vochures6";
$results=mysqli_query($dbh,$sql) or die(mysql_error($dbh));

$db_host="localhost";
$db_name="holiday tours";
$db_user="root";
$db_pass="";
$con= mysqli_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysqli_select_db($con,'holiday tours') or die(mysql_error($con));
mysqli_close($con); 
?>
<h3><a href="reservation.html">return</a></h3>
</html>