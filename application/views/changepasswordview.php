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

  

<?php echo $this->session->flashdata('message');?>
  <h2>Change Password</h2>
  <form action="<?php echo base_url().'save-new-password'?>" method="POST">
  	<input type="hidden"  id="email" placeholder="Enter email" value="<?php echo $EmailId;?>" name="email" hidden>
    <div class="form-group">
      <label for="password">New Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
    </div>
    
    <div class="form-group">
      <label for="password">Confirm Password:</label>
      <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" name="confirm-password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <!-- <a href="<?php echo base_url().'forgot-password'?>">Forgot Password</a> -->
</div>

</body>
</html>
