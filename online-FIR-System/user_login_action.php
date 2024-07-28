<?php
session_start();
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
				$e=$_REQUEST['email'];
			$p=$_REQUEST['password'];
			$q="select *from user where u_id='$e'";
			$qu=mysqli_query($conn,$q);
			$rs=mysqli_fetch_assoc($qu);
			$dp=$rs['u_pass'];
			$_SESSION['user_name']=$rs['u_name'];
			$_SESSION['user_aadhar']=$rs['a_no'];
			$_SESSION['email']=$rs['u_id'];
			if($dp==$p && $e!="" && $p!="" && $dp!="")
			{
				header("location:complainer_page.php");
			}
			else
			{
				echo "plz enter a valid passwrod";
				header("location:user_login.php");
				
				
			}
			}
		  ?>