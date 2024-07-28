

<?php
	include "header/officeheader.php";
?>

<html>
<body>
<?php
$server="localhost";
			$user="root";
			$password="";
			$db="crimepotal_final";
			$conn=mysqli_connect($server,$user,$password,$db);
		
			if(!$conn)
			{
			echo "not connected...";
			}
			$id=$_GET['id'];
			
			$q="select *from complaint where c_id=$id";
			$qu=mysqli_query($conn,$q);
			$rs=mysqli_fetch_assoc($qu);
			
			
			
			
			
			?>
            

<h1 style="color:#0CF; text-align:center ; margin-top:5%;"> Work progress </h1>
<div class="container " style="margin-top:1%; margin-left:35%; width:30%; text-align:center">
<form name="f" method="post" action="update_user.php">

	<table align="center " border="1">
    <tr>
    <td> complain id </td>
    	<td> <input type="text" value="<?php echo $rs['c_id']; ?> " name="id" >
         </td>
      </tr>
        <tr>
    <td> User Email </td>
    	<td> <input type="email" value="<?php echo $rs['u_email']; ?>" name="email" disabled >
         </td>
      </tr>
        <tr>
    <td>  Location</td>
    	<td> <input type="text" value="<?php echo $rs['location'];; ?> " name="location" disabled>
         </td>
      </tr>
        <tr>
    <td> Crime type</td>
    	<td> <input type="text" value="<?php echo $rs['type_crime']; ?>" name="ctype" disabled>
         </td>
      </tr>
        <tr>
    <td> Date Of Crime </td>
    	<td> <input type="text" value="<?php echo $rs['d_o_c']; ?>" name="doc" disabled>
         </td>
      </tr>
      
        <tr>
    <td> Description  </td>
    	<td> <input type="text" value="<?php echo $rs['description']; ?>" name="des" disabled>
         </td>
      </tr>
          <tr>
    <td> inspection Status  </td>
    	<td> <div class="mb-3">
                        <select  class="form-control"   name="status">
							<option >Unassigned</option>
							<option >Assigned</option>
							<option >Criminal Accepted the Crime</option>
                            <option >Case has Been moved to court</option>
						</select>
					</div>
         </td>
      </tr>
         <tr>
    <td> police Name </td>
    	<td> <input type="text"  value="<?php echo $rs['pol_status'];?> " name="polname">
         </td>
         </tr>
           <td> police Id </td>
    	<td> <input type="text"  value="<?php echo $rs['p_id'];?> " name="pid" >
         </td>
      </tr>
  
      
      </table>
      <div class="mb-1" style="margin-top:15px">
  <input style="background-color:#9F3" class="form-control form-control-sm"  type="submit"  name="submit">
</div>
</form>
</div>
<div style="margin-top:8%; background-color:green; height:50px; padding-top:20px">
<?php
	include "footer/footer.php";
	
?>
</div>