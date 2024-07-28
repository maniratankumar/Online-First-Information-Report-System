
<?php
	include "header/header.php";
?>





<div class="container-fluid" style="width:1000px">
<h1 align="center"> User Register </h1>
<div class=" container">
	
			<div class="login-form">	
				<form action="action_reg.php" method="POST">
					<p style="color:#dfdfdf">Full Name</p><input type="text"  name="name" class="form-control"  required="" onfocusout="f1()" />
					<p style="color:#dfdfdf">Email-Id</p><input type="email"  class="form-control" name="email"  required=""  onfocusout="f1()"/>
                    <p style=" color:#FFF">Password</p><input type="text"  name="password"  placeholder="6 Character minimum" pattern=".{6,}"  required onfocusout="f1()"/>
					<p style="color:#dfdfdf">Home Adress</p><input class="form-control" type="text"  name="adress"  required="" onfocusout="f1()"/>
					<p style="color:#dfdfdf">Aadhar Number</p><input class="form-control" type="text"   name="aadhar_number" minlength="12" maxlength="12" required pattern="[123456789][0-9]{11}" placeholder="Enter your 12 digits aadhar " />
					<div class="left-w3-agile">
						<p style="color:#dfdfdf">Gender</p><select  class="form-control"   name="gender">
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
					</div>
					<div class="right-agileits">
						<p style="color:#dfdfdf">Mobile</p><input type="text"  name="mobile_number" required pattern="[6789][0-9]{9}" minlength="10" maxlength="10" id="mobno" onfocusout="f1()"/>
					</div>
					<button class="form-control" type="submit"  name="submit"> Create Account </button>
				</form>	
			</div>	
		</div>


 
      
      </div>
</div>

</div>	
</div>	
<?php
	include "footer/footer.php";
?>
<div style="background-color:#CCC">