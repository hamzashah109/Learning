<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>list</title>
	<link rel="stylesheet" type="text/css" href="<?php echo  base_url().'asstes/bootstrap.css';?>"> 
</head>
<body>
<a class="btn btn-primary" href="<?php echo base_url('user/create');?>">Create</a> 
	
<div class="container"> 
			      
  <table class="table" border="1">
    <thead>
      <tr>
	  <th>ID</th>
        <th>Name</th>
        <th>Address</th>
		<th colspan ="1">Operation</th>

      </tr>
	</thead>
	<?php if(!empty($users)){ foreach($users as $user) {?>
    <tbody>
      <tr>
		<td><?php echo $user['id']?></td>
		<td><?php echo $user['name']?></td>
		
		<td><?php echo $user['address']?></td>
		<td>

		<a class="btn btn-primary" href="<?php echo base_url().'User/edit/'.$user['id']?>"> 
Edit
		</a>
		<a class="btn btn-primary" href="<?php echo base_url().'User/delete/'.$user['id']?>"> 
Delete
		</a>
		</td>
      </tr>
<?php }} else {?>
	<td colspan="5">No Record</td>
<?php }?>
    </tbody>
  </table>
</div>
</div>
</body>
</html>
