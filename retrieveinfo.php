<html>
<body bgcolor="white">
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysqli_error($dbh));
echo "HOTEL DETAILS";
$var=mysqli_query($dbh,"SELECT * FROM hotel");
echo "<table border size=1>";
echo "<tr><th>h_id</th> <th>h_name</th> <th>address</th> <th>rating</th></tr>";
while($arr=mysqli_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
}
echo "</table>";
 echo "PACKAGE DETAILS";
$var=mysqli_query($dbh,"SELECT * FROM package");
echo "<table border size=1>";
echo "<tr><th>p_id</th> <th>p_name</th> <th>price</th> <th>places</th><th>rating</th><th>departuredate</th><th>arrivaldate</th></tr>";
while($arr=mysqli_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> </tr>";
}
echo "</table>";
echo"VEHICLE DETAILS";
$var=mysqli_query($dbh,"SELECT * FROM vehicle");
echo "<table border size=1>";
echo "<tr><th>v_no</th> <th>v_name</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> </tr>";
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
<h3><a href="reservation.html">return</a></h3>
</body>
</html>


