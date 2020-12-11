<html>
<body bgcolor="white">
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysqli_error());
$rd=$_REQUEST['rd'];
$vno=$_REQUEST['vno'];
$hd=$_REQUEST['hd'];
$pd=$_REQUEST['pd'];
$cd=$_REQUEST['cd'];
$noh=$_REQUEST['noh'];
$query="INSERT INTO reservation VALUES('$rd','$vno','$hd','$pd','$cd','$noh')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data inserted successfully!!!";
$var=mysqli_query($dbh,"SELECT * FROM reservation");
echo "<table border size=1>";
echo "<tr><th>r_id</th> <th>v_no</th> <th>h_id</th> <th>p_id</th> <th>c_id</th><th>no_of_heads</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td></tr>";
}
echo "</table>";
$db_host="localhost";
$db_name="holiday tours";
$db_user="root";
$db_pass="";
$con= mysqli_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysqli_select_db($con,'holiday tours') or die(mysql_error($con));
mysqli_close($con); 
 
?>
<h3><a href="payment.php">add payment</a><br>
<a href="customer.html">return</a></h3>
</body>
</html>


