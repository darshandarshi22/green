<html>
<body bgcolor="white">
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysqli_error($dbh));
$vno=$_REQUEST['vno'];
$vn=$_REQUEST['vn'];

$query="INSERT INTO vehicle VALUES('$vno','$vn')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));

			
			if($result)
			{
			 echo "data inserted successfully!!!";
			}
			else
			{
			  echo "not inserted";
			}

echo "</table>";
$db_host="localhost";
$db_name="holiday tours";
$db_user="root";
$db_pass="";
$con= mysqli_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysqli_select_db($con,'holiday tours') or die(mysqli_error($con));
mysqli_close($con); 
 
?>
<h3><a href="retrievevehicle.php">display vehicle details</a></h3>
<h3><a href="updatevehicle.php">update</a></h3>
<h3><a href="vehicle.html">return</a></h3>
</body>
</html>


