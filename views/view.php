<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src = "js/bootstrap.min.js"></script>

	<style type="text/css">
		.container{
			text-align: center;
		}
	</style>
</head>
<body>
	
	<div class = "container">
		<div class = "row">
			<h2> Thong tin nguoi dung</h2>
				<table class="table table-condensed table-striped table-bordered">

					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>Password</th>
						<th>Name</th>
						<th>Email</th>
						
						<th colspan="3">action</th>

					</tr>
						<?php if (!empty($rows)):?>
					<!-- <?php //if($num_rows = mysqli_num_rows($result)>0): ?> -->
						<?php  while($row = $rows->fetch_assoc() ):?>
							<tr>
								<td> <?php echo $row["id"]?></td>
								<td> <?php echo $row["name"] ?></td>
								<td> <?php echo $row["email"] ?></td>
								<td> <?php echo $row["username"] ?></td>
								<td> <?php echo $row["password"] ?></td>
								
								<td>
                    				
                    				<a href="update.php?username=<?php echo $row['username'];?>">Update</a> 

               					</td>
               					<td>
                    				
                    				<a href="index.php?id=<?php echo $row['id'];?>">Delete</a> 
                    				<!-- <a href="delete.html">Delete</a> -->
               					</td>
               					<td>
               						<a href="index.php">Logout</a>
               					</td>



							</tr>
						<?php endwhile;?>	
					<?php endif;?>
				</table>
		</div>
	</div>

</body>
</html>