
 


<html>
<head>
<title>ADD PAYMENT DETAILS</title>
<link rel="stylesheet" type="text/css"
	 href="css/add.css">
	
</head>

<body>


	
	
	<div class="heading-1">
	  <h1>ENTER PAYMENT DETAILS</h1>
	  </div>
	  
	
	  
	
<form class="my-form" method="GET" >
	 <div>
	 PAYMENT ID:
	 <input type="text" name="pay_id" placeholder="Enter PAYMENT id">
	  </div>
	   <br>
	  <div>
	 RESERVATION ID:
	 <input type="text" name="r_id" placeholder="Enter delivery id">
	  </div>
	   <br>
	   <div>
	  PAYMENT METHOD:
	    <input type="text" name="p_method" placeholder="Enter payment method">
	  </div>
	  <div>
	 <br>
	  PAYMENT DATE:
	    <input type="date" name="p_date" placeholder="Enter payment date">
	  </div>
	  <br>
	   
	  <br>
	  <input class="button" type="submit" name="submit" value="submit">
	 </form>

    <?php
	 
	 
	 $conn=mysqli_connect('localhost','root','') or die(mysqli_error());
     mysqli_select_db($conn,'holiday tours') or die(mysql_error());
	  error_reporting(0);
	    if($_GET['submit'])
		{
		  $p_id = $_GET['pay_id'];
		  $b = $_GET['r_id'];
		  $d = $_GET['p_date'];
		  $c = $_GET['p_method'];
		  
		  if($p_id!="" && $b!="" && $c!="" && $d!=""  )
		  {
		    $sql = "INSERT INTO payment VALUES('$p_id','$b','$c','$d')";
			$data = mysqli_query($conn,$sql);
			
			if($data)
			{
			  echo "voucher generated and Added to voucher list";
			  header("refresh:1;url=generatevoucher.php");
			}
			else
			{
			  echo "not inserted";
			}
		  }
		  else
			{
			  echo "all fields required";
			}
		  }
		  
		  
	 
	 ?>


</body>
</html>