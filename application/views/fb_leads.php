
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link type="text/css" rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-2.2.1.min.js"> </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



<nav class="navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Facebook Leads </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="active"><a href="<?php echo base_url('?lang=au')?>">AU </a></li>
         <li class="active"><a href="<?php echo base_url('?lang=uk')?>">UK </a></li>
         <li class="active"><a href="<?php echo base_url('?lang=se')?>">SE </a></li>
         <li class="active"><a href="<?php echo base_url('?lang=fi')?>">FI </a></li> 
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('auth/logout')?>">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="row-fluid">
	<div class="container">
		<h4>UNIQUE <?php echo isset($_GET['lang'])?$_GET['lang']:NULL;?> emails: <?php echo $unique;?></h4>
		<br/>
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
      <th>Country</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($fb_users as $fb_user):?>
    <tr>
      <td></td>
      <td><?php echo $fb_user['f_name'].' '.$fb_user['l_name']?></td>
      <td><?php echo $fb_user['email']?></td>
      <td><?php echo $fb_user['source']?></td>
    </tr>
	<?php endforeach;?>
  </tbody>
</table> 
</div> 
</div>