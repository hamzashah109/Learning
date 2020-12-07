<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo  base_url().'asstes/bootstrap.css';?>"> 
</head>
<body>
<div class="container"> 
<form method="POST" action="<?php echo base_url("User/EditData");?>" >
  <div class="form-group">
    <label for="email">Name:</label>
	<input type="text" name="name" value="<?php  echo set_value('name',$user['name']);?>" class="form-control" id="email">
	<input type="hidden" name="id" class="form-control" value="<?php  echo set_value('id',$user['id']);?>">
  </div>
  <div class="form-group">
    <label for="pwd">Address:</label>
    <input type="text" name="address" value="<?php  echo set_value('address',$user['address']);?>" class="form-control" id="pwd">

</div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" name="EditData" class="btn btn-default">Update</button>
</form>
</div>
</body>
</html>
