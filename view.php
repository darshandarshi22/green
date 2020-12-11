<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
 die('could not connect');
}
$sql="select * from package";
mysqli_select_db($conn,'holiday tours');
$res=mysqli_query($conn,$sql);
echo "<table border size=1>";
echo "<tr><th>p_id</th><th>p_name</th><th>price</th><th>places</th><th>rating</th><th>departuredate</th><th>arrivaldate</th></tr>";

while($row=mysqli_fetch_array($res))
{
  echo "<tr>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	<td>$row[5]</td>
	<td>$row[5]</td>
        <td><a href=delpackage.php?p_id=".$row[0].">delete</a></td>
	</tr>\n";
}
echo "</table>";
echo "fetched data successfully!!\n";
echo '<br>';
mysqli_close($conn);
?>
<h3><a href="package.html">return </a><br></h3>
</body>
</html>