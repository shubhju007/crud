<!-- <?php print_r($emp);?> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Department</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($emp as $f)?>
      <tr>
        <td><?php echo $f->emp_name ;?></td>
        <td><?php echo $f->dep_name ;?></td>
        <td><?php echo $f->EmailId ;?></td>
        <td><a href="<?php echo base_url().'priyanka/editViewp/'.$f->emp_id?>">Edit</a></td>
         <td><a href="<?php echo base_url().'priyanka/deleteuser/'.$f->emp_id?>">Delete</a></td>

      </tr>
    </tbody>
  </table>

<div class="container">
  <h2>Stacked form</h2>
  <form action="<?php echo base_url().'priyanka/storeData'?>" method="POST">
    <div class="form-group">
      <label for="name">name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
   <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
  <label for="sel1">Department Id:</label>
  <select class="form-control" name="dep" id="dep">
     <?php foreach($dep as $d){

      echo '<option value="'.$d->dep_id.'">'.$d->dep_name.'</option>';

    }?>
        
  </select>
</div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
