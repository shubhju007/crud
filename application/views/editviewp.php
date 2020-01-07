
  <div class="container">
  <h2>Stacked form</h2>
  <form action="<?php echo base_url().'priyanka/EditData'?>" method="post">
    <input type="hidden" class="form-control" value="<?php echo $useredit->emp_id;?>" id="name" placeholder="Enter name" name="id">
    <div class="form-group">
      <label for="name">name:</label>
      <input type="name" class="form-control" value="<?php echo $useredit->emp_name;?>" id="name" placeholder="Enter name" name="name">
    </div>
   <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" value="<?php echo $useredit->EmailId;?>" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
  <label for="sel1">Department Id:</label>
   <select class="form-control" name="depid" id="sel1">
    <?php foreach($dep as $d):?>

    <option value="<?php echo $d->dep_id;?>" 
      <?php 
        if ($d->dep_id == $useredit->dep_id) {
          echo 'selected';
        }

      ?>
      ><?php echo $d->dep_name;?></option>
  <?php endforeach;?>
  </select>
</div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
