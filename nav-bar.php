<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>
<?php
  $beginning = '<div class="container"><nav class="navbar  navbar-default "><div class="navbar-header">
      <a class="navbar-brand">Navigation Bar </a>
    </div><ul class="nav navbar-nav justified">';
  $frontLink = '<li class="nav-item"> <a class="" href="';
  $endLink = '</a></li>';

  if (isset($_SESSION['user-type'])) {
      echo $beginning;

      switch ($_SESSION['user-type']) {
      case 'doctor':
		$email = $_SESSION['email'];
		$result = getDoctorDetails($email);
		$speciality = $result['speciality'];
		
        echo $frontLink.'add_patient.php"> Add Patient '.$endLink;
        echo $frontLink.'patient_details.php?speciality='.$speciality.'"> Upcomming bOOKING '.$endLink;
        break;
      case 'Nurses':
        echo $frontLink.'add_patient.php"> Add Patient '.$endLink;
        echo $frontLink.'patient_details.php"> All booking '.$endLink;
        break;
      default:
        // code...
        break;
    }
      echo '</ul> </nav></div>';
  }

?>
