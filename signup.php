

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'template/header_main.php';?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					
					<div class="account-wall">
						<h2>Register</h2>
						<form action="function/signup-reg.php" method="POST" class="form-signin">
							<input type="text" name="fname" class="form-control" placeholder="First name" required autofocus style="margin-bottom: 10px;">
							<input type="text" name="lname" class="form-control" placeholder="Last name" required autofocus style="margin-bottom: 10px;">
							<input type="text" name="username" class="form-control" placeholder="User name" required autofocus style="margin-bottom: 10px;">
							<input type="password" name="password" class="form-control" placeholder="Password" required autofocus style="margin-bottom: 10px;">
							
							<input type="text" name="project" class="form-control" placeholder="Project" required autofocus style="margin-bottom: 10px;">
							<input type="text" name="role" class="form-control" placeholder="Role" required autofocus style="margin-bottom: 10px;">
							<input type="email" name="email" class="form-control" placeholder="Email" required style="margin-bottom: 10px;">
							<button class="btn btn-lg btn-primary btn-block" type="submit">
							Sign up</button>
							
							
						</form>
					</div>
					
				</div>
			</div>
			
		</div>
		<?php include 'template/footer_script_main.php';?>
	</body>
</html>