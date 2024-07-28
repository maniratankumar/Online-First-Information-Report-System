<?php
session_start();
if(!isset( $_SESSION['email'] ))
{
	header("location:user_login.php");
}

?>

<div style="background-color:#CCC">
<?php
	include "header/userheader.php";
?>


<?php

$email=$_SESSION['email'];
		
 $server="localhost";
			$user="root";
			$password="";
			$db="crimepotal_final";
			$conn=mysqli_connect($server,$user,$password,$db);
		
			if(!$conn)
			{
			echo "not connected...";
			}
				
			$em=$_SESSION['email'];
			$q="select *from complaint where u_email='$email'";
			$qu=mysqli_query($conn,$q);
			?>
            
        
 </div>
 
            <?php echo $_SESSION['email'];?> 
          
            <div style="padding:50px;">
      <table class="table table-bordered">
       <thead class="thead-dark" style="background-color: black; color: white;">
            <tr>
            	<th> complain id </th>
                <th> customr email </th>
                <th>Location of Crime</th>
         		 <th>Type of Crime</th>
          		<th>Date of Crime</th>
          		<th>description</th>
          		<th> Status </th>
            </tr>
            </thead>
         
            <?php
			while($rs=mysqli_fetch_assoc($qu))
			{
				?>
                 <tbody style=" background-color:#0FC ; color: black;">
                <tr>
                <td><?php echo $rs['c_id']; ?> </td>
                <td><?php echo $rs['u_email']; ?> </td>
                <td><?php echo $rs['location'];; ?> </td>
                <td> <?php echo $rs['type_crime']; ?></td>
                <td> <?php echo $rs['d_o_c']; ?></td>
                <td><?php echo $rs['description']; ?> </td>
                <td><?php echo $rs['inc_status'];?> </td>
			
			
			</tr>
			</tbody>
			
			<?php
			
			}
			?>
            </table>
      </div>
		


<?php
	include "footer/footer.php";
?>



</div>
			