<?php
session_start();
if(!isset($_SESSION['user_name'] ))
{
	header("location:user_login.php");
}
?>
<div style="background-color:#CCC">



<?php
	include "header/userheader.php";
?>


<div class="container-flude form-margin"  style="background-color:#C30">
<div class="container">
<form name="f" method="post" action="complaint_action.php">
<div align="center">
<h2 style="color:#03C"> Welcome to <?php echo $_SESSION['user_name'];?> </h2>
 <br>
 <h3 style="color:#069"> Log New Complai </h3>
 <br>
 </div>
<div align="left">
<div>
<label class="fsize"> Aadhar </label><br>
<input type="tel" class="form-control"  name="aadhar" placeholder="Aadhar number" required disabled value="<?php echo $_SESSION['user_aadhar']; ?> ">
</div>

<div>
<label class="fsize"> Location of Crime </label>
<select class="form-control" name="Location_crime" style="color:#03F">
						<option>Ranchi</option>
                        <option>Gumla</option>
                        <option>lohardaga</option>
                        <option>simdega</option>
                        <option>khunti</option>
                        <option>Jamsedputr</option>
                        <option>pakur</option>
				    </select>
</div>

<div>
<label class="fsize"> Type of Crime </label>
<select class="form-control" name="type_crime">
						<option>Theft</option>
						<option>Robbery</option>
                        <option>Pick Pocket</option>
                        <option>Murder</option>
                        <option>Rape</option>
                        <option>Molestation</option>
                        <option>Kidnapping</option>
                        <option>Missing Person</option>
				    </select>
</div>

<div>
<label class="fsize"> Date Of Crime : </label>
<input type="datetime-local" class="form-control" name="date" placeholder="Enter DAte of Crime"  required>
</div>

<div>
<label class="fsize"> Description : </label>
						<textarea  name="description" rows="6" cols="55" placeholder="Describe the incident in details with time"  required></textarea>
					</div>
                    <br>
					<input type="submit"  class="form-control btn btn-primary form-control" value="Submit" name="s">
				</form>	
</div>

</div>
</form>
</div>
</div>






<?php
	include "footer/footer.php";
?>
</div>