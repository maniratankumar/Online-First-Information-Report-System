
<?php session_start();

if(!isset($_SESSION['email'] ))
{
	header("location:user_login.php");
}
?>
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
			else{
				
			$u_email=$_SESSION['email'] ;

			$q="select *from complaint where u_email=$u_email";
			$qu=mysqli_query($conn,$q);
			$rs=mysqli_fetch_assoc($qu);
			{
			
			$c_id=$rs['c_i_d'];
			$toc=$rs['type_crime'];
			$doc=$rs['d_o_c'];
			$loc=$rs['location'];
			$stat=$rs['inc_status'];
			}
			?>


<div style="background-color:#CCC">
<?php
	include "header/userheader.php";
?>

    <div>
        <form style="float: right; margin-right: 100px; margin-top: 65px; margin-bottom:10px;" method="post">
            <input type="text" name="cid" style="width: 250px; height: 30px; color: black;" placeholder="&nbsp Complain Id" id="ciid" onfocusout="f1()" required>
            <input class="btn btn-primary btn-sm" type="submit" value="Search" style="margin-top:2px; margin-left:20px;" name="s2">
            
        </form>
        
        
 </div>
 
 
 
    <div style="padding:50px;">
      <table class="table table-bordered">
       <thead class="thead-dark" style="background-color: black; color: white;">
         <tr>
          <th>Complaint Id</th>
          <th>Type of Crime</th>
          <th>Date of Crime</th>
          <th>Location of Crime</th>
          <th> Status </th>
        </tr>
      </thead>
 

    <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rs['c_i_d']; ?></td>
        <td><?php echo $rs['type_crime']; ?></td>     
        <td><?php echo $rs['d_o_c']; ?></td>          
        <td><?php echo $rs['location']; ?></td>
        <td><?php echo $rs['inc_status']; ?></td>
      </tr>
    </tbody>
    
    <?php
    } 
    ?>
  
</table>
 </div>
 

 

			
			
 
<div style="margin-top:250px">
<?php
	include "footer/footer.php";
?>
</div>

</div>