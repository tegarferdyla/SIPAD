<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Valid Token</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="<?php echo site_url('login/tokensend') ?>" method="get">
		<input type="text" name="token" placeholder="Masukan Kode Verifikasi"><br>
		<input type="submit" name="" value="Reset Password">
	</form>
</body>
</html>