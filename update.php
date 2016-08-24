<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
	<title>Update User</title>
	</head>
	<body>
	<div class="container-fluid" id="update">
	<div class="col-md-10 col-md-offset-1">
		<p>Update User</p>
		<?php
			include "db.php";
			$id=$_GET['id'];
		
			$query="SELECT * FROM user WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
		
			$row=mysqli_fetch_assoc($sendQuery);
			$name=$row['name'];
			$surname=$row['surname'];
			$phone=$row['phone'];
		?>
		<form action="" method="post">
		
			<div class="input-group">
				<input class="form-control" type="text" name="name" value="<?=$name?>">
			</div>
			
			<div class="input-group">
				<input class="form-control" type="text" name="surname" value="<?=$surname?>">
			</div>
			
			<div class="input-group">
				<input class="form-control" type="number" name="phone" value="<?=$phone?>">
			</div>
			
			<input class="btn btn-success" type="submit" name="update" value="Update">
			<input class="btn btn-default" type="submit" name="back" value="Back">
		</form>
		<?php
			if(isset($_POST['update'])){
				$name=$_POST['name'];
				$surname=$_POST['surname'];
				$phone=$_POST['phone'];
				
				echo $name." ".$surname." ".$phone;
				
				$query="UPDATE user SET name='$name', surname='$surname', phone=$phone WHERE id=$id";
				$sendQuery=mysqli_query($db_con,$query);
				
				header("Location:read.php?id=$id");
			}else if(isset($_POST['back'])){
				header('Location:list.php');
			}
		?>
		</div>
	</div>
	</body>
</html>