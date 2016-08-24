<!DOCTYPE html>
<html>
	<head>
		<title>All users</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
   	<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
		<style>
			table{
				border:1px solid gray;
			}
			table td{
				padding:5px;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Surname</th>
				<th>Phone</th>
				<th colspan="2">Operations</th>
			</tr>
			<?php
				include "db.php";
				
				if($db_con){
					$query="SELECT * FROM user";
					$sendQuery=mysqli_query($db_con,$query);

					while($row=mysqli_fetch_assoc($sendQuery)){
						echo "<tr>";
						foreach($row as $key => $value){
							echo "<td>".$value."</td>";
						}
						$id=$row['id']; ?>
						<td>
							<a class='btn btn-default' href='read.php?id=<?= $id ?>'>Read</a>
						</td>
						<td>
							<a class='btn btn-success' href='update.php?id=<?= $id ?>'>Update</a>
						</td>
						<td>
							<a class='btn btn-danger' href='delete.php?id=<?= $id ?>'>Delete</a>
						</td>
					<?php }
				}else{
					echo "Qosulmadi!";
				}
			?>
		</table>
	</body>
</html>