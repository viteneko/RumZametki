<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'notes');
	$query = mysqli_query($connect, 'SELECT * FROM zametki ORDER BY id DESC');
	$query2 = mysqli_query($connect, 'SELECT * FROM zametki WHERE status=1');
	?>
	<!--потом сделаешь-->
	<div></div>
	<form method="POST" action="insert.php">
		<input type="text" name="text_note" placeholder="Введите дело">
		<input type="date" name="data" placeholder="дд.мм.гггг">
		<button>Create</button> 
	</form>
	<?php
	for($i=0; $i < $query->num_rows; $i++){

	 $row = $query->fetch_assoc(); 
	 if ($row['status']==true) {
	 	$color = 'green';
	 	$decor = 'line-through';
	 }else{
	 	$color = 'red';
	 	$decor = 'none';
	 }
	 ?>
	 <div>
	 <div>
	 	<?php echo '<p>'. $row['data']. '</p>' ?>
	 </div>
	 <div>
	 	<?php echo '<h2 style="color: '. $color . '; text-decoration: '.$decor .'">'. $row['text_note']. '</h2>' ?>
	 </div>
	</div>
	<form method="POST" action="status.php">
		<?php echo '<input type="hidden" name="id" value="' . $row['id'] . '">'; ?>
		<button >Done</button>
	</form>
	<form method="GET" action="delete.php">
				<?php echo '<input name="id" value="' . $row['id'] . '" style="display:none">'; ?>
				<button>Delete</button>
	</form>
	<script type="text/javascript">
		var a = document.querySelector()
	</script>
	<?php } ?>
</body>
</html>