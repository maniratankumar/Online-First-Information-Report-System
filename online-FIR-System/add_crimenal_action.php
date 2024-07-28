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
		
			
		$cname=$_REQUEST['name'];
		$chight=$_REQUEST['height'];
		$cweight=$_REQUEST['weight'];
		$cdate=$_REQUEST['date'];
		$cgender=$_REQUEST['gender'];
		$caddress=$_REQUEST['address'];
		
		
				$q="INSERT INTO crimenal_list(name,hight, weight, date, gender, address) VALUES ('$cname','$chight','$cweight','$cdate',' $cgender','$caddress')";
			
$qu=mysqli_query($conn,$q);
header("location:crimenal_history.php");
			?>
			