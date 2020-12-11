<html>
<body bgcolor="white">
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysqli_error());
$pd=$_REQUEST['pd'];
$pn=$_REQUEST['pn'];
$pr=$_REQUEST['pr'];
$pl=$_REQUEST['pl'];
$rt=$_REQUEST['rt'];
$dpr=$_REQUEST['dpr'];
$arvl=$_REQUEST['arvl'];
$query="INSERT INTO package VALUES('$pd','$pn','$pr','$pl','$rt','$dpr','$arvl')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data inserted successfully!!!";


$var=mysqli_query($dbh,"SELECT * FROM package");
echo "<table border size=1>";
echo "<tr><th>p_id</th> <th>p_name</th> <th>price</th> <th>places</th> <th>rating</th> <th>departurdate</th> <th>arrivaldate</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td>   <td><a href=delpackage.php?p_id=".$arr[0].">delete</a></td></tr>";
}


echo "</table>";
$db_host="localhost";
$db_name="holiday tours";
$db_user="root";
$db_pass="";
$con= mysqli_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysqli_select_db($con,'holiday tours') or die(mysqli_error($con));

$po=mysqli_query($con,"call total(@out);");
$rs=mysqli_query($con,'SELECT @out');
while($row=mysqli_fetch_row($rs))
{
echo 'Income=' .$row[0];
}
mysqli_close($con); 
 
?>
<h3><a href="package.html">return</a></h3>
</body>
</html>


