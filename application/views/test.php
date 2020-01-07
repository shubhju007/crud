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
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
 
      </tr>
    </thead>
    <tbody>
      <?php print_r($details);?>
    <?php foreach($details as $user):?>
          <tr>
           <td><?php echo $user->FirstName?></td>
           <td><?php echo $user->EmailId?></td>
           <td><a href="">Edit</a></td>
           <td><a href="">Delete</a></td>
          </tr>
        <?php endforeach;?> 
    </tbody>
  </table>
</div>

<div class="container">
  
  <form action="<?php echo base_url().'test/storeuser'?>" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="name">name:</label>
      <input type="test" class="form-control" id="name" placeholder="Enter password" name="name">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
