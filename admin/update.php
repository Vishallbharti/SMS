<?php
 session_start();
  if($_SESSION[uid])
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

include('../dbconnect.php');

$sid=$_GET['sid'];

$sql="SELECT * FROM student WHERE Id='$sid'";
$run=mysqli_query($con,$sql);

$data=mysqli_fetch_assoc($run);
?>

<form method="post" action="updatedata.php" enctype="multipart/form-data" style="margin-top:50px">
<table border="1" style="width:80%;" align="center">
<tr>
<td>Roll No</td><td><input type="text" name="rollno" value=<?php echo $data['roll_no']?> required></td>
</tr>
<tr>
<td>Full Name</td><td><input type="text" name="name" value=<?php echo $data['name']?> required></td>
</tr>
<tr>
<td>City</td><td><input type="text" name="city" value=<?php echo $data['city']?> required></td>
</tr>
<tr>
<td>Parent Contact No</td><td><input type="text" name="pcon" value=<?php echo $data['parcont']?> required></td>
</tr>
<tr>
<td>Standerd<td><input type="number" name="std" value=<?php echo $data['standard']?> required></td>
</tr>
<tr>
<td>Image</td><td><input type="file"  name="simg" required></td>
<tr>
<td colspan="2" align=""><input type="hidden" name="sid" value="<?php echo $data['Id']?>"/>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT"></td></tr>
</table>
</form>
</body>
</html>
