<?php // $this->load->view('auth/header');?>

<div class="row-fluid">
<form class="form-horizontal" method="POST" action="<?php echo base_url('auth/register')?>">
  <fieldset>
    <legend>Register </legend>
     <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input type="text" name="fname" class="form-control" id="inputPassword" placeholder="First Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input type="text" name="lname" class="form-control" id="inputPassword" placeholder="Last Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>

  
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
<?php // $this->load->view('auth/footer');?>



