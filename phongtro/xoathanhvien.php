<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$db = mysqli_connect('localhost','root','','ql_phongtro');

		if (!$db) {
			echo "Lỗi kết nối";
		} else {
			$CMT_CCCD= $_REQUEST['CMT_CCCD'];
			$sql_del = "Delete from ql_khachthue where CMT_CCCD = '".$CMT_CCCD."'";

			mysqli_query($db,$sql_del);
			header('location:thanhvienshow.php');
		}
	 ?>
</body>
</html>