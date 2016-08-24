<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
	<title>Delete</title>
	</head>
	<body>
		<p>Are you sure you want to delete this user?</p>
		<form action="list.php" method="post">
			<input class="btn btn-success" type="submit" name="yes" value="YES">
			<input class="btn btn-danger" type="submit" name="no" value="NO">
		</form>
		<?php
			if(isset($_POST['yes'])){
				include "db.php";
				$id=$_GET['id'];

				$query="DELETE FROM user WHERE id=$id";
				$sendQuery=mysqli_query($db_con,$query);
				header('Location:list.php');
			}else if(isset($_POST['no'])){
				header('Location:list.php');
			}
		?>
	</body>
</html>