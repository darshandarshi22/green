<html>
<body bgcolor="yellow">
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysqli_error($dbh));
$td=$_REQUEST['td'];
$tn=$_REQUEST['tn'];
$ad=$_REQUEST['ad'];
$ph=$_REQUEST['ph'];
$ed=$_REQUEST['ed'];
$query="INSERT INTO travelagency VALUES('$td','$tn','$ad','$ph','$ed')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data inserted successfully!!!";
$var=mysqli_query($dbh,"SELECT * FROM travelagency");
echo "<table border size=1>";
echo "<tr><th>t_id</th> <th>t_name</th> <th>address</th> <th>phone</th> <th>email_id</th></tr>";
while($arr=mysqli_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
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
<a href="travelagency.html">return</a>
</body>
</html>


