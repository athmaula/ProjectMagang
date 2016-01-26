<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" href="../asset/css/bootstrap.min.css" type="text/css"  />
	<link rel="stylesheet" type="text/css" href="../asset/css/main.css">
</head>
<body>
	<div class="container">
		<div class="col-xs-12 col-md-7 col-md-offset-2">	
			 <div class="form-container">
				<form method="post">
					<h3>Sign In</h3>
					<hr />
					<div class="form-group">
		            	<input type="text" class="form-control" name="username" placeholder="Username" required />
		            </div>
		            <div class="form-group">
		            	<input type="password" class="form-control" name="password" placeholder="Password" required />
		            </div>
		            <div class="clearfix"></div><hr />
		            <div class="form-group">
		            	<button type="submit" name="btn-login" class="btn btn-block btn-primary">
		                	<i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
		            	</button>
		            </div>
		        </form>
			</div>
		</div>
	</div>
</body>
</html>