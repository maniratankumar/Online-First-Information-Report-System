<?php session_start(); ?>
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
			
			
	if(isset($_POST['submit']))
	{
		$username=$_REQUEST['name'];
		$useremail=$_REQUEST['email'];
		$userpassword=$_REQUEST['password'];
		$useraddress=$_REQUEST['adress'];
		$useraadhar=$_REQUEST['aadhar_number'];
		$usergender=$_REQUEST['gender'];
		$usermobile=$_REQUEST['mobile_number'];
		$emailquery="select * from user where u_id='$useremail'";
		$query=mysqli_query($conn,$emailquery);
		$emailcount=mysqli_num_rows($query);
		if($emailcount>0)
		{
			echo "email already exists";
		}
		else
		{
			$insertquery="insert into user(u_name,u_id,u_pass,u_addr,a_no,gen,mob) values('$username','$useremail','$userpassword','$useraddress','$useraadhar','$usergender','$usermobile')";
			$iquery=mysqli_query($conn,$insertquery);
			header("location:user_login.php");
		
	}
	
	}
			}?>

