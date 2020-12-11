<html>
<body>
<?php

$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'holiday tours') or die(mysql_error($dbh));
$sql="DELETE FROM vehicle WHERE v_no='$_GET[v_no]'";
if(mysqli_query($dbh,$sql))
header("refresh:1;url=retrievevehicle.php");
else
echo "not deleted";
?>
<h3>deleted successfully</h3>

</body>
</html>