<html>
<?php

$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysqli_error($dbh));

/*$sql="CREATE VIEW vochures6 AS
SELECT reservation.r_id,reservation.c_id,package.price 
FROM reservation
LEFT JOIN package on reservation.p_id=package.p_id";
$results=mysqli_query($dbh,$sql) or die(mysqli_error($dbh));*/
$var=mysqli_query($dbh,"SELECT * FROM voucher");
echo "<table border size=1>";
echo "<tr><th>r_id</th> <th>c_id</th> <th>p_id</th> <th>price</th></tr>";
 while($arr=mysqli_fetch_row($var) )
   {
             
        echo "<tr><td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td></tr>";
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
<h3><a href="index.html">home</a></h3>
</html>