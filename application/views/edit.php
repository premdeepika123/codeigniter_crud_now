<!DOCTYPE html>
<html>
<head>
	<title>CRUD Application -Update User</title>
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css "  rel="stylesheet">
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>

	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<h3><center><font color="blue">Update User</font></center> </h3>
	<div class ="navbar  navbar-dark bg-dark">
		<div class ="container">

			<a href ="#" class="navbar-brand">CRUD APPLICATION </a>
	</div>
</div>

<div class="container"  style="padding-top: 20px;">
	<div class="row">
		<form method=post name="updateUser" action="<?php echo base_url().'user/edit/'.$user['user_id'];?>">
		<div class ="col-lg-12 col-lg-offset-2">
			<div class="form-group">
				<label> Username</label>
				<input type="text" name="username" id="username" value="<?php echo set_value('username',$user['username']);?>" class="form-control">
				<?php echo form_error('username');?>
			</div>
			<div class="form-group">
				<label> email</label>
				<input type="text" name="email" id="email"  value="<?php echo set_value('email',$user['email']);?>" class="form-control">
				<?php echo form_error('email');?>
			</div>

			
			
			
			<div class ="form-group">
				<button class ="btn btn-primary">Update</button>
				<a href="<?php echo base_url().'user/index';?>" class="btn-secondary btn">Cancel</a>
			</div>
		</div>
		</form>


</div>
</div>









</body>
</html>
