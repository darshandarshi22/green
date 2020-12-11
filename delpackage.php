<html>
<body>
<?php
$conn=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($conn,'holiday tours') or die(mysqli_error($conn));
$sql="DELETE FROM package WHERE p_id='$_GET[p_id]'";
if(mysqli_query($conn,$sql))
header("refresh:1;url=retrievepackage.php");
else
echo "not deleted";
?>
<h3>deleted successfully</h3>

</body>
</html>