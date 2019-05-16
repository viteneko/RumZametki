<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'notes');
	$query = mysqli_query($connect, "INSERT INTO zametki (text_note, data) VALUES ('" . $_POST['text_note'] . "', '" . $_POST['data'] . "')");
		header('Location: http://a.aa.a/index.php');
 ?>