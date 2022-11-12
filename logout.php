<?php
	session_start();
	session_unset(); 
	session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="Developers" content="group 11 section 002" />
	<meta http-equiv="refresh" content="2;url=index.php"/>
	<title>HMS | Logout</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
	<header>
		<h1 class="text-center text-info">You have logged out!</h1>
	</header>

<?php include('footer.php'); ?>