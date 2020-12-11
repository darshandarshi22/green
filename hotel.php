<html>
<body bgcolor="white">
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysqli_error($dbh));
$hd=$_REQUEST['hd'];
$hn=$_REQUEST['hn'];
$adr=$_REQUEST['adr'];
$rt=$_REQUEST['rt'];
$query="INSERT INTO hotel VALUES('$hd','$hn','$adr','$rt')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data inserted successfully!!!";
$var=mysqli_query($dbh,"SELECT * FROM hotel");
echo "<table border size=1>";
echo "<tr><th>h_id</th> <th>h_name</th> <th>address</th> <th>rating</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
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
<h3><a href="updatehotel.html">update</a></h3>
<h3><a href="hotel.html">return</a></h3>
</body>
</html>


