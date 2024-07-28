
<?php
	include "header/officeheader.php";
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
				
			$q="select *from complaint";
			$qu=mysqli_query($conn,$q);
			?>
            
         <div>
        <form style="float: right; margin-right: 100px; margin-top: 65px;" method="post" action="searchuserdata.php">
            <input type="text" name="cid" style="width: 250px; height: 30px; color: black;" placeholder="&nbsp Complain Id" id="ciid" onfocusout="f1()" required>
            <input class="btn btn-primary btn-sm" type="submit" value="Search" style="margin-top:2px; margin-left:20px;" name="s2">
        </form>
    </div>
   
        
 </div>
 
          
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
                <th> police status </th>
                <th> police id </th>
                <th> Action </th>
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
                 <td><?php echo $rs['pol_status'];?> </td>
                  <td><?php echo $rs['p_id'];?> </td>
                  <td> <a href="police_feedback.php?id=<?php echo $rs['c_id']; ?> "> police Action </a> </td>
			
			
			</tr>
			</tbody>
			
			<?php
			
			}
			?>
            </table>
      </div>
		



<?php
	include "footer/footer.php";
	
?>l