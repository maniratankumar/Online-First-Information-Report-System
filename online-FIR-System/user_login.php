<?php
session_start(); 
?>
<?php
	include "header/header.php";
?>

<div>
	<h1 align="center" style="margin-top:7%;"> <u> <strong> User Login </strong> </u></h1>

 <div  align="center" style="margin-bottom:7%; margin-left:30%; margin-right:30%"  >
	<div class="form" style="margin-top:10%">
		<form method="post" action="user_login_action.php">
  <div class="form-group" style="width: 40%;">
    <label><h1 style="color: #fff;">User Id</h1></label>
    <input type="email"  placeholder="Enter Email id" required name="email" onfocusout="f1()">
     </div>
  <div class="form-group" style="width:40%">
    <label><h1 style="color: #fff;">Password</h1></label>
    <input type="password" placeholder="Password" required name="password" onfocusout="f1()">
  </div>
  <br>
  <button type="submit" class=" btn-outline-primary  form-control"  name="submit"  value="Login" onclick="f1()"> Login </button>
</form>
	</div>
</div>




<br>
<div style="margin-top:6px;>"
<?php
	include "footer/footer.php";
?>
</div>