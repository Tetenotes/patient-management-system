<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    
	include 'header.php';
  
	
	include 'nav-bar.php';
?>

<div class = 'container'>
<h2>Upcomming Bookings</h2>
<p>Click on the the field to fill additional information</p>

<table class='table table-striped text-center '>
  <thead class="thead-inverse">
				<tr>
				<th><center>Booking
 No</center></th>
				<th><center>Patient's Full Name</center></th>
                                <th><center>Patient's Location</center></th>
                                <th><center>Date admission</center></th>
                                 <th><center>Medical Condition</center></th>
                                <th><center>Drugs administred</center></th>
                                <th><center>Prescription</center></th>
				
				</tr>
	</thead>
<?php
	if(isset($_GET['speciality'])){
		 $speciality = $_GET['speciality'];
		 $result = getPatientsFor($speciality);
	}else {
		$result = getPatientsFor(); //fallback to 'Dentist'
	}
	
    foreach ($result as $row) {
        $status = ' ';
        if (appointment_status((int) $row['booking_no']) == 1) {
            $status = 'table-active';
        } elseif (booking_status((int) $row['booking_no']) == 2) {
            $status = 'table-success';
        }

        $link = "<td ><a href= 'update_info.php?booking_no=".$row['booking_no']."'>";
        $endingTag = '</a></td>';
        echo '<tr class="'.$status.'"> ';
        echo "$link".$row['booking_no']."$endingTag";
        echo "$link".$row['full_name']."$endingTag";
        echo "$link".$row['medical_condition']."$endingTag";
        echo '</tr>';
    }
?>
</table>
</div>

<?php include 'footer.php'; ?>
