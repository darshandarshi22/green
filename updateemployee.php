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
$ed=$_POST['ed'];
$en=$_POST['en'];
$ad=$_POST['ad'];
$ph=$_POST['ph'];
$eid=$_POST['eid'];
$gn=$_POST['gn'];
$sal=$_POST['sal'];
$sql="update employee set e_id='$ed',e_name='$en',address='$ad',phone='$ph',email_id='$eid',gender='$gn',salary='$sal' where e_id='$ed'";
mysqli_select_db($conn,'holiday tours');
$ret=mysqli_query($conn,$sql);
if(!$ret)
{
  die('could not update data:');
}
echo "updated successfully\n";
echo "<a href='retrieveemployee.php'>view record</a>";
mysqli_close($conn);
}
else
{
?>
<form method="post" action="">
<table width "400" border="0" cellspacing="1" cellpadding="2">

<tr>
<td width="100">e_id</td>
<td><input name="ed" type="text" id="ed"></td>
</tr>

<tr>
<td width="100">e_name</td>
<td><input name="en" type="text" id="en"></td>
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
<td><input name="eid" type="text" id="eid"></td>
</tr>
<tr>

<tr>
<td width="100">gender</td>
<td><input name="gn" type="text" id="gn"></td>
</tr>
<tr>

<tr>
<td width="100">salary</td>
<td><input name="sal" type="text" id="sal"></td>
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