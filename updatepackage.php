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
$p_id=$_POST['p_id'];
$p_name=$_POST['p_name'];
$price=$_POST['price'];
$places=$_POST['places'];
$rating=$_POST['rating'];
$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$sql="update package set p_name='$p_name',price='$price',places='$places',rating='$rating',departure='$departure',arrival='$arrival' where p_id='$p_id'";
mysqli_select_db($conn,'holiday tours');
$ret=mysqli_query($conn,$sql);
if(!$ret)
{
  die('could not update data:');
}
echo "updated successfully\n";
echo "<a href='view.php'>view record</a>";
mysqli_close($conn);
}
else
{
?>
<form method="post" action="">
<table width "400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">package id</td>
<td><input name="p_id" type="text" id="p_id"></td>
</tr>

<tr>
<td width="100">package name</td>
<td><input name="p_name" type="text" id="p_name"></td>
</tr>

<tr>
<td width="100">price</td>
<td><input name="price" type="text" id="price"></td>
</tr>
<tr>

<tr>
<td width="100">places</td>
<td><input name="places" type="text" id="places"></td>
</tr>
<tr>

<tr>
<td width="100">rating</td>
<td><input name="rating" type="text" id="rating"></td>
</tr>
<tr>

<tr>
<td width="100">departure date</td>
<td><input name="departure" type="date" id="departure"></td>
</tr>
<tr>

<tr>
<td width="100">arrival date</td>
<td><input name="arrival" type="date" id="arrival"></td>
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