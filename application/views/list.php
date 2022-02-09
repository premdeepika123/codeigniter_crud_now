<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crud Application - View Users</title>
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
			<div class="row">
				<div class="col-md-06">
					<?php
					$success=$this->session->userdata('success');
					if($success != ""){
				?>
			
					<div class ="alert alert-success"><?php echo $success;?></div>
					<?php
				}
				 ?>
		<?php
			$failure=$this->session->userdata('failure');
			if($failure != ""){
				?>
			
			<div class ="alert alert-success"><?php echo $failure;?></div>
			<?php
		}
		?>
	</div>
</div> 
	<div class="row">
		<div class ="col-md-6">
			<div class="row">
				<div class="col-6" ><h2> View Users</h2></div>
				<div class="col-6 	text-right">
				<a href="<?php echo base_url().'user/create';?>"class ="btn btn-primary">Create</a>	 	
			</div>
		</div>
		<hr>
	</div>
</div>		
				
	<div class="row">
		
		<div class ="col-lg-8 col-lg-offset-2">
			
			
			<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>Username </th>
				<th>Email </th>
				<th>Edit</th>
				<th>Delete</th>
					
				
				</tr>
				<?php if(!empty($users)) {foreach($users as $user){?>
			<tr>
				<td> <?php echo $user["user_id"]?></td>
				<td> <?php echo $user["username"]?></td>
				<td> <?php echo $user["email"]?></td>
				<td>
					<a href ="<?php echo base_url().'user/edit/'.$user['user_id']?>" class="btn btn-primary">Edit</a>
				</td>
				<td>
					<a href ="<?php echo base_url().'user/delete/'.$user['user_id']?>" class="btn btn-danger">Delete</a>
				</td>


			</tr> 
			<?php   } } else {?>
		<tr>
			<td colspan ="5">Records not found</td>
		</tr>
		<?php }?>
			</table>


</div>
</div>

</body>
</html>
</body>
</html>
