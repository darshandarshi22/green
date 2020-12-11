<html>
<body bgcolor="white">
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysqli_error());
$ed=$_REQUEST['ed'];
$en=$_REQUEST['en'];
$ad=$_REQUEST['ad'];
$ph=$_REQUEST['ph'];
$eid=$_REQUEST['eid'];
$gn=$_REQUEST['gn'];
$sal=$_REQUEST['sal'];
$query="INSERT INTO employee VALUES('$ed','$en','$ad','$ph','$eid','$gn','$sal')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data inserted successfully!!!";

echo "</table>";
$db_host="localhost";
$db_name="holiday tours";
$db_user="root";
$db_pass="";
$con= mysqli_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysqli_select_db($con,'holiday tours') or die(mysqli_error($con));
mysqli_close($con); 
 
?>
<br>
<h3><a href="retrieveemployee.php">view records</a></h3>
<h3><a href="employee.html">return</a></h3>
</body>
</html>


