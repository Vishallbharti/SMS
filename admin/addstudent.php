<?php
 session_start();
  if($_SESSION['uid'])
  {
    echo "";	  
  }
  else
  {
	  header('location:../login.php');
  }
?>
<?php
include('header.php');
include('titleheader.php');
?>
<form method="post" action="addstudent" enctype="multipart/form-data" style="margin-top:50px;">
<table border="1" style="width:80%;" align="center">
<tr>
<td>Roll No</td><td><input type="text" name="rollno" placeholder="Enter Roll" required></td>
</tr>
<tr>
<td>Full Name</td><td><input type="text" name="name" placeholder="Enter Full Name" required></td>
</tr>
<tr>
<td>City</td><td><input type="text" name="city" placeholder="Enter City" required></td>
</tr>
<tr>
<td>Parent Contact No</td><td><input type="text" name="pcon" placeholder="Enter the contact no of parent" required></td>
</tr>
<tr>
<td>Standerd<td><input type="number" name="std" placeholder="Enter Standerd" required></td>
</tr>
<tr>
<td>Image</td><td><input type="file"  name="simg" required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT"></td></tr>
</table>
</form>
</body>
</html>

<?php
 if(isset($_POST['submit']))
 {
	include('../dbconnect.php'); 
	
	$rolno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcon'];
	$std=$_POST['std'];
	$imagename=$_FILES['simg']['name'];
	$tempname=$_FILES['simg']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$imagename");
	
	$qry="INSERT INTO student(`roll_no`,`name`,`city`,`parcont`,`standard`,`image`) VALUES('$rolno','$name','$city','$pcon','$std','$imagename')";
    $run=mysqli_query($con,$qry);
	
	
	
	
	if($run==true)
	{
	 ?>
     <script>
	    alert('Data Inserted successfuly.'); 
	 </script>	
	 <?php
	}
 }
  
?>