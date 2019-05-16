<?php  $connect = mysqli_connect('127.0.0.1', 'root', '', 'notes');
	$kek = mysqli_query($connect, "DELETE FROM zametki WHERE id ='" . $_GET['id'] . "'");
	header('Location: http://a.aa.a/index.php');
 ?> 