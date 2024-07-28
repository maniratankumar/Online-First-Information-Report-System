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
			$ci=$_REQUEST['id'];
            $pls=$_REQUEST['status'];
			 $pln=$_REQUEST['polname'];
			  $plid=$_REQUEST['pid'];
			  $q="update complaint set inc_status='$pls', pol_status='$pln', p_id='$plid' where c_id=$ci"; 
			  $qu=mysqli_query($conn,$q);
			  mysqli_close($conn);
			  
			header("location:demo.php");
			
            ?>