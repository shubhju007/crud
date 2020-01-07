<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add a User</h2>
  <form action="<?php echo base_url().'test/updateuser'?>" method="POST">

    <input type="hidden" name="id" value="<?php echo $user->id?>">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email"  value="<?php echo $user->EmailId?>" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="name">:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $user->FirstName?>" placeholder="Enter " name="name">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
