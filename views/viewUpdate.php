<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		
		<script type="text/javascript" src = "js/bootstrap.min.js"></script>
		
		 

		<title>Admin</title>
	</head>
	<body>
	
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Company Name</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					 <?php //var_dump($arr['name']);?>
					<form class="form-horizontal" method="POST" id= "submit" action="" >
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" value = "<?php echo $arr['name'];?>" class="form-control" name="name"  placeholder="Enter your Name" required/>
									
								
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" value = "<?php echo $arr['email'];?>" class="form-control" name="email" id="email"  placeholder="Enter your Email" required />
									
								</div>
							</div>
						</div>						
						

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" value = "<?php echo $arr['username'];?>" class="form-control" name="username" id="username"  placeholder="Enter your Username" required/>
									
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" value = "<?php echo $arr['password'];?>"class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
									
								</div>
							</div>
						</div>

			

						<div class="form-group ">
							<input type="submit" name ="submit" class="btn btn-primary btn-lg btn-block login-button" value = "Update">Register</input>
						</div>	
					</form>
				</div>
				
			</div>
		</div>
		
	</body>
	
	
</html>



