<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    
	include("header.php");
	
 
	if(isset($_SESSION["user-type"]) && $_SESSION["user-type"] != 'normal'){
		include("nav-bar.php");
	}
?>
<div class="container">
  <h2>Welcome, <?php echo isset($_SESSION["fullname"]) ? $_SESSION["fullname"] : "No User";?>!</h2>
      <div class='alert alert-info'>
              <strong>Info!</strong> booking will be done on daily basis - <?php echo date("d/m/y"); ?>. Booking time will be between 8.00am to 5.00pm or 4:30 to 9:30 once booking is booked.</div>
      <h3>Enter Information</h3>
                <?php
                  if(isset($_POST['apfullname'])){
                    $i = enter_patient_info($_POST['apfullname'],$_POST['apAge'],$_POST['apweight'],$_POST['apphone_no'],$_POST['apaddress']);
                    booking_booking($i, $_POST['apSpecialist'], $_POST['apCondition']);
                    unset($_POST['apfullname']); //unset all post variables
                    if (isset($_POST['apfullname'])){
                      echo '<script type="text/javascript">location.reload();</script>';
                    }

                  }
                ?>
            <form action="add_patient.php" method="POST">

            <div class="form-group" >
              <label for="usr">Full Name:</label>
              <input type="text" class="form-control" id="usr" name="apfullname" required>
            </div>

            <div class="form-group">
              <label for="pwd">Age: (in years)</label>
              <input type="number" class="form-control" id="pwd" name="apAge" min="1" max="120" required>
            </div>
            <div class="form-group">
              <label for="pwd">Weight (in kgs):</label>
              <input type="tel" class="form-control" id="pwd" name="apweight" min="1" max="200" required>
            </div>
            <div class="form-group">
              <label for="pwd">Phone No:</label>
              <input type="tel" class="form-control" id="pwd" name="apphone_no" required>
            </div>
            <div class="form-group">
              <label for="pwd">Address:</label>
              <textarea class="form-control" id="pwd" name="apaddress" required></textarea>
            </div>

            <div class="form-group">
              <label for="pwd">Doctor Needed:</label>
              <select required value=1 name="apSpecialist">
                <option value="surgery" class="option">Surgery</option>
                <option value="dentist" class="option">Teeth</option>
               
              </select>
            </div>

            <div class="form-group">
              <label for="pwd">Medical Condition:</label>
              <textarea class="form-control" id="pwd" name="apCondition" required></textarea>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary" >
              <input type="reset" name="" class="btn btn-danger">
            </div>
          </form>
</div>
<?php
  include("footer.php");
?>
