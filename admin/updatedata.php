<?php
if(isset($_POST['submit']))
 {
	include('../dbconnect.php'); 
	
	$rolno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcon'];
	$std=$_POST['std'];
	$id=$_POST['sid'];
	$imagename=$_FILES['simg']['name'];
	$tempname=$_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$imagename");
	
	$qry="UPDATE `student` SET roll_no='$rolno',name='$name',city='$city',parcont='pcon',standard=standard,image='$imagename' WHERE Id='$id'";
    $run=mysqli_query($con,$qry);
	
	
	
	
	if($run==true)
	{
	 ?>
     <script>
	    alert('Data Update successfuly.'); 
		window.open('updatestudent.php?sid=<?php echo $id?>','self');
	 </script>	
	 <?php
	}
 }
  
?>