<html>
<body bgcolor="white">
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysqli_error($dbh));


$var=mysqli_query($dbh,"SELECT * FROM vehicle");
echo "<table border size=1>";
echo "<tr><th>v_no</th> <th>v_name</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td><a href=delvehicle.php?v_no=".$arr[0].">delete</a></td> </tr>";
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
<h3><a href="vehicle.html">return</a></h3>
</body>
</html>


