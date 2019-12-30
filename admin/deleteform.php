<?php
include('../dbconnect.php'); 
	
	$id=$_REQUEST['sid'];
	
	
	
	
	$qry="DELETE FROM student WHERE Id='$id';";
    $run=mysqli_query($con,$qry);
	
	
	
	
	if($run==true)
	{
	 ?>
     <script>
	    alert('Data Deleted successfuly.'); 
		window.open('deletestudent.php','_self');
	 </script>	
	 <?php
	}
  
?>