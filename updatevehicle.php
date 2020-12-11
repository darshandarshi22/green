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
$vno=$_POST['vno'];
$vn=$_POST['vn'];

$sql="update vehicle set v_no='$vno',v_name='$vn' where v_no='$vno'";
mysqli_select_db($conn,'holiday tours');
$ret=mysqli_query($conn,$sql);
if(!$ret)
{
  die('could not update data:');
}
echo "updated successfully\n";
echo "<a href='retrievevehicle.php'>view record</a>";
mysqli_close($conn);
}
else
{
?>
<form method="post" action="">
<table width "400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">vno</td>
<td><input name="vno" type="text" id="vno"></td>
</tr>

<tr>
<td width="100">vname</td>
<td><input name="vn" type="text" id="vn"></td>
</tr>

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