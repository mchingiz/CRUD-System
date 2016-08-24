<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
	<title>Create User</title>
	</head>
	<body>
		<?php
			include "db.php"; ?>
			
			<form action="" method="post">
				<div class="input-group">
					<input class="form-control" type="text" name="name" placeholder="Ad">
				</div>	
				<div class="input-group">
					<input class="form-control" type="text" name="surname" placeholder="Soyad">
				</div>	
				<div class="input-group">
					<input class="form-control" type="number" name="phone" placeholder="Telefon nomresi">
				</div>	
				<input class="btn btn-success" type="submit" name="submit" value="Yarat">
			</form>
		<?php
			if(isset($_POST['submit'])){
				if( !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['phone']) ){
					$name=$_POST['name'];
					$surname=$_POST['surname'];
					$phone=$_POST['phone'];

					$query="INSERT INTO user (name,surname,phone) VALUES('$name','$surname','$phone')";
					$sendQuery=mysqli_query($db_con,$query);

					if($sendQuery){
						header('Location:create.php');
					}else{
						echo "User has not been added to the table";}
				}else{
					echo "Fill all the forms!";
				}
			}
		?>
	</body>
</html>