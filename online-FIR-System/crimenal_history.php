
<?php
	include "header/officeheader.php";
?>
<h1 style="color:#0CF; text-align:center ; margin-top:5%;"> Add Criminal </h1>


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
				
			$q="select *from crimenal_list";
			$qu=mysqli_query($conn,$q);
			?>
            
        
 </div>
          
            <div style="padding:50px;">
      <table class="table table-bordered">
       <thead class="thead-dark" style="background-color: black; color: white;">
            <tr>
            	<th> complain id </th>
                <th> Criminal Name </th>
                <th>Criminal height</th>
         		 <th>Criminal Weight</th>
          		<th>Date of birth</th>
          		<th>Gender</th>
          		<th> Address </th>
            </tr>
            </thead>
         
            <?php
			while($rs=mysqli_fetch_assoc($qu))
			{
				?>
                 <tbody style=" background-color:#0FC ; color: black;">
                <tr>
                <td><?php echo $rs['criminal_id']; ?> </td>
                <td><?php echo $rs['name']; ?> </td>
                <td><?php echo $rs['hight'];; ?> </td>
                <td> <?php echo $rs['weight']; ?></td>
                <td> <?php echo $rs['date']; ?></td>
                <td><?php echo $rs['gender']; ?> </td>
                <td><?php echo $rs['address'];?> </td>
			
			
			</tr>
			</tbody>
			
			<?php
			
			}
			?>
            </table>
      </div>
		