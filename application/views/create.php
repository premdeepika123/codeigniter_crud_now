<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crud Application - Create User</title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css "  rel="stylesheet">
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>

	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-dark bg-dark">
	<div  class="container">
		<a href="#" class="navbar-brand">CRUD APPLICATION</a>
	</div>
</div>
		<div class="container" style="padding-top: 20px";>
			<form method="post" name="CreateUser" action="<?php echo base_url().'user/create';?>">
				
	<div class="row">
		
		<div class ="col-lg-10 col-lg-offset-2">
			<h3>Create User</h3>
			<hr>
			<div class="form-group">
				<label> Username</label>
				<input type="text" name="username" id="username" value="<?php echo set_value('username');?>" class="form-control">
				<?php echo form_error('username');?>
			</div>
			<div class="form-group">
				<label> Password</label>
				<input type="password" name="password" id="password" value="<?php echo set_value('password');?>" class="form-control">
				<?php echo form_error('password');?>
			</div>
			<div class="form-group">
				<label> email</label>
				<input type="text" name="email" id="email"  value="<?php echo set_value('email');?>" class="form-control">
				<?php echo form_error('email');?>
			</div>


			
			<div class ="form-group">
				<button class ="btn btn-primary">Create</button>
				<a href="<?php echo base_url().'user/index';?>" class="btn-secondary btn">Cancel</a>
			</div>
		</div>
		</form>


</div>
</div>









</body>
</html>
</body>
</html>
