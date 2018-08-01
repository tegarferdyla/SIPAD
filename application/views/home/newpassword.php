<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Password Baru</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="<?php echo site_url('login/sendpassword') ?>" method="post">
		<input type="hidden" name="token" value="<?php echo $user['id_user'] ?>">
		<input type="password" name="password" required><br>
		<input type="submit" name="" value="Ganti Password">
	</form>
</body>
</html>