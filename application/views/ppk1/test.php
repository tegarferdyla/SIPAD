<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<?php 
		if ($show!=NULL) {
			foreach ($show as $u) {
				$surat_alih = $u['bmn_surat_alih'];
			}
		}else{
			$surat_alih = "";
		}
		echo "test";
	?>
</body>
</html>