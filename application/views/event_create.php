
  <div class="container">
  	
    <p><center><h1>Create a new event</h1></center></p>
<br>
  <?php if (isset($_GET['error'])) { ?>
    <?php if ($_GET['error'] == "3") { ?>
    <div class="alert alert-danger">That email address is already taken. Please use a different email address!</div>
    <?php } else if ($_GET['error'] == "2") { ?>
    <div class="alert alert-danger">Please make sure that your password and password confirmation match!</div>
    <?php } else if ($_GET['error'] == "1") { ?>
    <div class="alert alert-danger">Please make sure that your fill out all the required fields!</div>
    <?php } ?>
  <?php } ?>

  <form class="form-horizontal" action="event/create/save" method="post">
    <div class="control-group">
      <label for="inputEmail" class="col-lg-2 control-label">Event Name</label>
      <div class="controls">
        <input type="text" class=" span8" name="inputFullName" placeholder="Full Event Name">
      </div>
    </div>
    <div class="control-group">
      <label for="inputEmail" class="col-lg-2 control-label">Location</label>
      <div class="controls span6">
        <input type="text" class="control-control" name="inputEmail" placeholder="Location">
      </div>
    </div>
    <div class="control-group">
      <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
      <div class="controls">
        <input type="password" class="control-control" name="inputPassword1" placeholder="Password">
        <input type="password" class="control-control" name="inputPassword2" placeholder="Password Confirmation">
      </div>
    </div>    
    <div class="form-group">
      <label for="inputSubmit" class="col-lg-2 control-label"></label>
      <div class="controls">
        <button type="submit" class="btn btn-default">Sign Up</button>
      </div>
    </div>  </form>


</div>
