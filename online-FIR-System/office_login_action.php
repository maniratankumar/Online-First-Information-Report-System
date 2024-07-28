
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
			$q="select *from head where headid='$e'";
			$qu=mysqli_query($conn,$q);
			$rs=mysqli_fetch_assoc($qu);
			$dp=$rs['headpass'];
			echo $dp;
			
			if($dp==$p && $e!="" && $p!="" && $dp!="")
			{
				header("location:demo.php");
			}
			else
			{
				echo "plz enter a valid passwrod";
		
				
				
			}
			}
		  ?>