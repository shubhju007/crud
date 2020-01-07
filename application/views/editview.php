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
  <h2>Edit User</h2>
  <form enctype="multipart/form-data" action="<?php echo base_url().'home/updateuser'?>" method="POST">

    <input type="hidden" name="id" value="<?php echo $user->emp_id?>">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email"  value="<?php echo $user->EmailId?>" placeholder="Enter email" name="email" readonly>
    </div>
    <div class="form-group">
      <label for="name">:</label>
      <input type="text" class="form-control" id="name"  value="<?php echo $user->emp_name?>" placeholder="Enter " name="name">
    </div>
    <div class="form-group">
      <label for="sel1">Select list:</label>
      <select class="form-control" name="depid" id="sel1">
        <?php foreach($dept as $d):?>

        <option value="<?php echo $d->dep_id;?>" 
          <?php 
            if ($d->dep_id == $user->dep_id) {
              echo 'selected';
            }

          ?>
          ><?php echo $d->dep_name;?></option>
      <?php endforeach;?>
      </select>
    </div>
    
     <div class="fileinput fileinput-new" data-provides="fileinput">
          <span class="btn btn-default btn-file"><input type="file" name="userimage"/></span>
      </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
