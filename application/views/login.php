<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php include_once('master.php'); ?>
		
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		
			<div class="panel panel-default">
				<br><br>
				<div class="panel-heading">Login</div>
					<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url('login/login');?>">

						<div class="form-group">
							<label class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<!-- <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div> -->

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
