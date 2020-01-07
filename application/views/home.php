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
  
  <div class="row">
    Logged in as: <?php print_r($this->session->userdata('name'));?>
    <span></span>
    <button><a href="<?php echo base_url()?>logout">Logout</a></button>

  </div>
  <div class="row">
    <table class="table table-striped">
      <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Department  name</th>
        <th>Edit</th>
        <th>Delete</th>
      </thead> 
      <tbody>
        <?php foreach($users as $user):?>
          <tr>
           <td><?php echo $user->emp_name?></td>
           <td><?php echo $user->EmailId?></td>
           <td><?php echo $user->dep_name?></td>
           <td><a href="<?php echo base_url().'home/editview/'.$user->emp_id?>">Edit</a></td>
           <td><a href="<?php echo base_url().'home/deleteuser/'.$user->emp_id?>">Delete</a></td>
          </tr>
        <?php endforeach;?>
      </tbody>

    </table>
  </div>


  <h2>Add a User</h2>
  <form action="<?php echo base_url().'home/saveuser'?>" enctype="multipart/form-data" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter " name="name">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="name" placeholder="Enter " name="password">
    </div>

    <div class="form-group">
      <label for="sel1">Select list:</label>
      <select class="form-control" name="depid" id="sel1">
        <option>Select</option>
        <?php foreach($dept as $d){

          echo '<option value="'.$d->dep_id.'">'.$d->dep_name.'</option>';

        }?>
    <!--       echo '<option value="'.$d->dep_id.'">'.$d->dep_name.'</option>';
     -->


         <!--  echo "<option>".$category->Category_name."</option>"; -->

       
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
