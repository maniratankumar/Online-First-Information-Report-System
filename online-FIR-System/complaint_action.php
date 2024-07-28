<html> 
<head>
<script src="js/bootstrap.bundle.min.js">
</script>
<script src="js/bootstrap.bundle.js"> </script>
</head>
</html>

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
			
			else
			{
		$u_email=$_SESSION['email'] ;
        
     
		
		$useraadhar=$_SESSION['user_aadhar'];
		$loc=$_REQUEST['Location_crime'];
		$toc=$_REQUEST['type_crime'];
		$doc=$_REQUEST['date'];
		$desc=$_REQUEST['description'];
		$incstatus="Unassigned";
		
		$insertquery="insert into complaint(u_email,a_no,location,type_crime,d_o_c,description, inc_status) values('$u_email','$useraadhar','$loc','$toc','$doc','$desc','$incstatus')";
			$iquery=mysqli_query($conn,$insertquery);
			?>
			<script>
				alert(" 1 record inserted ");
			</script>
            <?php
			header("location:complainer_page.php");
			}
			?>