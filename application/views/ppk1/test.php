<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="<?php echo site_url('PPK1/testkirim') ?>" method="post">
		<!-- <input type="checkbox" name="checked1">
		<input type="checkbox" name="checked2">
		<input type="checkbox" name="checked3"> -->
		<?php 
		for ($i=1; $i <=10 ; $i++) { 
			echo "<input type='checkbox' name='checked$i'>";
		}
		 ?>
		<input type="submit">
	</form>
</body>
</html>