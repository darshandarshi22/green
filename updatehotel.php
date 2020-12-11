<html>
<head><title>update</title></head>
<body style="background:url(10.jpg);background-repeat:no-repeat;background-size:100% 100%;
height:800px;background-attachment:fixed">
<?php
if(isset($_POST['update']))
{
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
die('could not connect');
}
$hd=$_POST['hd'];
$hn=$_POST['hn'];
$adr=$_POST['adr'];
$rt=$_POST['rt'];

$sql="update hotel set h_id='$hd',h_name='$hn',address='$adr',rating='$rt' where h_id='$hd'";
mysqli_select_db($conn,'holiday tours');
$ret=mysqli_query($conn,$sql);
if(!$ret)
{
  die('could not update data:');
}
echo "updated successfully\n";
echo "<a href='retrievehotel.php'>view record</a>";
mysqli_close($conn);
}
else
{
?>
<form method="post" action="">
<table width "400" border="0" cellspacing="1" cellpadding="2">

<tr>
<td width="100">hotel id</td>
<td><input name="hd" type="text" id="hd"></td>
</tr>

<tr>
<td width="100">hotel name</td>
<td><input name="hn" type="text" id="hn"></td>
</tr>

<tr>
<td width="100">address</td>
<td><input name="adr" type="text" id="adr"></td>
</tr>
<tr>

<tr>
<td width="100">rating</td>
<td><input name="rt" type="text" id="rt"></td>
</tr>
<tr>

<tr>
<td width="100"></td>
<td></td>
</tr>
<td width="100"></td>
<td>
<input name="update" type="submit" id="update" value="UPDATE">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>