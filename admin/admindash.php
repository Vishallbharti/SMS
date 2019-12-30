<?php
 session_start();
  if($_SESSION['uid'])
  {
    echo $_SESSION['uid'];	  
  }
  else
  {
	  echo "error";
  }
?>
<?php
include('header.php');
?>

<div class="admintitle" align="center">
 <h3><a href="logout.php" style="float:right; margin-right:30px; color:white; font-size:20px;">Logout</a></h3>
 </h3>
 <h1>Welcome To Admin Dashboard</h1>
</div>

<div class="Dashboard">
<table border="1" style="width:50%;" align="center">
<tr>
<td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
</tr>
<tr>
<td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
</tr>
<tr>
<td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
</tr>
</table>
</div>
</body>
</html>