<!DOCTYPE html>
<html>
	<head>
	 <link rel="stylesheet" href="assets/css/bootstrap.css">
   <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
	<title>User Details</title>
	</head>
	<body>
	<div class="container-fluid" id="update">
	<div class="col-md-10 col-md-offset-1">
		<p>User Details</p>
		<?php
			include "db.php";
			$id=$_GET['id'];
		
			$query="SELECT * FROM user WHERE id=$id";
			$sendQuery=mysqli_query($db_con,$query);
		
			if(!$sendQuery){
				echo "Error";
			}else{
				$row=mysqli_fetch_assoc($sendQuery);
				foreach($row as $key => $value){
					echo $key.": ".$value."<br>";
				}
			}
		?>
		</div>
		</div>
	</body>
</html>