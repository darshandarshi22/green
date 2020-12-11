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

$cd=$_POST['cd'];
$cn=$_POST['cn'];
$ad=$_POST['ad'];
$ph=$_POST['ph'];
$ed=$_POST['ed'];
$gn=$_POST['gn'];

$sql="update customer set c_id='$cd',c_name='$cn',address='$ad',phone='$ph',email_id='$ed',gender='$gn' where c_id='$cd'";
mysqli_select_db($conn,'holiday tours');
$ret=mysqli_query($conn,$sql);
if(!$ret)
{
  die('could not update data:');
}
echo "updated successfully\n";
echo "<a href='retrievecustomer.php'>view record</a>";
mysqli_close($conn);
}
else
{
?>
<form method="post" action="">
<table width "400" border="0" cellspacing="1" cellpadding="2">

<tr>
<td width="100">customer id</td>
<td><input name="cd" type="text" id="cd"></td>
</tr>

<tr>
<td width="100">customer name</td>
<td><input name="cn" type="text" id="cn"></td>
</tr>

<tr>
<td width="100">address</td>
<td><input name="ad" type="text" id="ad"></td>
</tr>
<tr>

<tr>
<td width="100">phone no.</td>
<td><input name="ph" type="text" id="ph"></td>
</tr>
<tr>

<tr>
<td width="100">email_id</td>
<td><input name="ed" type="text" id="ed"></td>
</tr>
<tr>

<tr>
<td width="100">gender</td>
<td><input name="gn" type="text" id="gn"></td>
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