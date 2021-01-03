<!DOCTYPE html>
<html lang="en_US">
<head>
<meta charset="UTF-8">
<title>Student Management System</title>
</head>
<body>
<h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome to Student Management System</h1>
<form action="index.php" method="post">
<table cellspacing="2px" style="width:50%;" border="1px" align="center">
<tr>
<td colspan="2" align="center">Student Information</td>
</tr>
<tr>
<td>Choose Standerd</td>
<td>
    <select name="std" required>
	<?php
	for($i = 0; $i<=12; $i++){
		?><option><?php echo $i ?></option>
		<?php
	}
	?>
	<!-- <option>1st</option>
	<option>2nd</option>
	<option>3rd</option>
	<option>4th</option>
	<option>5th</option>
	<option>6th</option>
	<option>7th</option>
	<option>8th</option>
	<option>9th</option>
	<option>10th</option>
	<option>11th</option>
	<option>12th</option> -->
	</select>
</td>
</tr>
<tr>
<td>Enter Roll No</td>
<td>
<input type="text" name="rollno">
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Show Information"></td>
</tr>
</table>
</form>
</body>
</html>
<?php 
 if(isset($_POST['submit']))
 {
	 $standard=$_POST['std'];
	 $rollno=$_POST['rollno'];
	 include('dbconnect.php');
	 include('function.php');
	 
	 showdetails($standard,$rollno);
 }
?>