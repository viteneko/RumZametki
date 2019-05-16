<?php  $connect = mysqli_connect('127.0.0.1', 'root', '', 'notes');
	$query = mysqli_query($connect, "UPDATE zametki SET status=true WHERE id ='" . $_POST['id'] . "'");
	header('Location: http://a.aa.a/index.php')
 ?>