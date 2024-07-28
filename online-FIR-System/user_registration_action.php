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
			$n=$_REQUEST['name'];
			$e=$_REQUEST['email'];
			$p=$_REQUEST['password'];
			$a=$_REQUEST['adress'];
			$aa=$_REQUEST['aadhar_number'];
			$ge=$_REQUEST['gender'];
			$mo=$_REQUEST['mobile_number'];

					
			$qu="insert into user(u_name,u_id,u_pass,u_addr,a_no,gen,mob) values('$n','$e','$p','$a','$aa','$ge','$mo')";
			mysqli_query($conn,$qu);
			header("location:index.php");
			}
					 ?>

