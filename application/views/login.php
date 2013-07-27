<br><br>
<div class="container" style="padding-top: 50px">
<p><center><h1>Login</h1></center></p>
<br>
  <?php if (isset($_GET['error'])) { ?>
    <?php if ($_GET['error'] == "3") { ?>
    <div class="alert alert-danger">That email address is already taken. Please use a different email address!</div>
    <?php } else if ($_GET['error'] == "2") { ?>
    <div class="alert alert-danger">Incorrect username and password! Please try again!</div>
    <?php } else if ($_GET['error'] == "1") { ?>
    <div class="alert alert-danger">Please make sure that your fill out all the required fields!</div>
    <?php } ?>
  <?php } ?>

  <form class="form-horizontal" action="account/login/save" method="post">
    <div class="control-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="controls">
        <input type="text" class="form-control" name="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="control-group">
      <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
      <div class="controls">
        <input type="password" class="form-control" name="inputPassword1" placeholder="Password">
      </div>
    </div>    
    <div class="control-group">
      <label for="inputSubmit" class="col-lg-2 control-label"></label>
      <div class="controls">
        <button type="submit" class="btn btn-default">Login</button>
      </div>
    </div>  </form>


</div>

