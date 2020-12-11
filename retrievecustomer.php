<html>
<body bgcolor="white">
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysql_error());


$var=mysqli_query($dbh,"SELECT * FROM customer");
echo "<table border size=1>";
echo "<tr><th>c_id</th> <th>c_name</th> <th>address</th> <th>phone</th> <th>email_id</th> <th>gender</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td><a href=delcustomer.php?c_id=".$arr[0].">delete</a></td> </tr>";
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
<h3><a href="reservation.html">click here to reserve</a></h3>
<h3><a href="customer.html">return</a></h3>
</body>
</html>


