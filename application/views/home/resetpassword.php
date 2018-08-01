<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reset Password</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="<?php echo site_url('login/resetpassword') ?>" method="post">
		<input type="text" name="username" placeholder="username" required><br>
		<input type="email" name="email" placeholder="email" required><br>
		<input type="submit" name="" value="Lupa Password">
	</form>
</body>
</html>