
<?php
	include "header/officeheader.php";
?>
<h1 style="color:#0CF; text-align:center ; margin-top:5%;"> Add Criminal </h1>
<div class="container " style="margin-top:1%; width:30%; background-color:#C30">
<form name="f" method="post" action="add_crimenal_action.php">
<div class="mb-3">
<br>
  <label  class="form-label">Criminal Name</label>
  <input type="text" name="name" class="form-control"  placeholder="Enter Criminal name">
</div>
<div class="mb-3">
  <label  class="form-label">Criminal height</label>
  <input type="text" name="height" class="form-control"  placeholder="criminal height">
</div>
<div class="mb-3">
  <label  class="form-label">Criminal Weight</label>
  <input type="text" name="weight" class="form-control"  placeholder="Enter Criminal weight">
</div>
<div class="mb-3">
  <label  class="form-label">Date of birth</label>
  <input  type="date" name="date" class="form-control"  placeholder="Enter Date of Birth">
</div>

<div class="mb-3">
			<label class="form-label"> Gender </label>
                        <select  class="form-control"   name="gender">
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Others</option>
						</select>
					</div>
<div class="mb-3">
  <label  class="form-label">Address</label>
  <input  type="text" name="address" class="form-control"  placeholder="Enter Address">
</div>
<div class="mb-3" style="margin-top:15px ; padding-top:10px ">
  <input style="background-color:#9F3" class="form-control form-control-sm"  type="submit"  name="submit">
</div>
<br>

</form>
</div>

<div style="margin-top:2%">
<?php
	include "footer/footer.php";
	
?>l
</div>