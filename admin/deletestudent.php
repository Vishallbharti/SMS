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

<table style="width:50%;" align=center>
 <form action="deletestudent.php" method="POST">

  
  <tr>
   <th>Enter standerd</th>
   <td><input type="number" name="standerd" placeholder="Enter standerd" required="required"/></td>
 
   <th>Enter Student name</th>
   <td><input type="text" name="stuname" placeholder="Enter student name" required="required"/></td>
  
   <td colspan="2"><input type="submit" name="submit" value="Search"></td>
  </tr>


 </form>
</table>



<table align="center" width="50%" border="1" style="margin-top:10px;">
<tr style="background-color:#000; color:#fff;">
<th>No</th>
<th>Image</th>
<th>Name</th>
<th>Rollno</th>
<th>Edit</th>
</tr>
<?php
 if(isset($_POST['submit']))
 {
	 include('../dbconnect.php');
	 
	 $standerd=$_POST['standerd'];
	 $name=$_POST['stuname'];
	 
	 
	 $sql="SELECT * FROM student WHERE standard='$standerd' AND name LIKE '%$name%'";
	 $run=mysqli_query($con,$sql);
	 
	 if(mysqli_num_rows($run)<1)
	 {
		 echo '<tr><td colspan="5">No Record Faund</td></tr>';
	 }
	 else
	 {
		 $count=0;
		 while($data=mysqli_fetch_assoc($run))
		 {
			 $count++; 
			 ?>
			 <tr>
              <td><?php echo $count;?></td>
              <td><img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px;"/></td>
              <td><?php echo $data['name'];?></td>
              <td><?php echo $data['roll_no'];?></td>
              <td><a href="deleteform.php?sid=<?php echo $data['Id'];?>">Delete</a></td>
             </tr>
			 <?php
		 }
	 }
	 
 }
?>