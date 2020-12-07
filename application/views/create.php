<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asstes/bootstrap.css');?>"> 
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form method="POST" name="createuser" action="<?php echo base_url('index.php/user/create');?>" >
        <div class="form-group">
          <label for="email">Name:</label>
        <input type="text" name="name" class="form-control" id="email">
        <?php echo form_error('name');?>
        </div>
        <div class="form-group">
          <label for="pwd">Address:</label>
          <input type="text" name="address" class="form-control" id="pwd">
        <?php echo form_error('address');?>
      </div>
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      </div>
    </div>
  </div>
</body>
</html>
