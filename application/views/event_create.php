
  <div class="container">
  	
  <div class="page-header">
    <h1>new event <small>in 60 seconds</small>
  </h1>
  </div>

  <?php if (isset($_GET['error'])) { ?>
    <?php if ($_GET['error'] == "3") { ?>
    <div class="alert alert-danger">That email address is already taken. Please use a different email address!</div>
    <?php } else if ($_GET['error'] == "2") { ?>
    <div class="alert alert-danger">Please make sure that your password and password confirmation match!</div>
    <?php } else if ($_GET['error'] == "1") { ?>
    <div class="alert alert-danger">Please make sure that your fill out all the required fields!</div>
    <?php } ?>
  <?php } ?>

  <form class="form-horizontal" action="/event/create/save" method="post">
    <div class="input-prepend">
      <span class="add-on">Event Name</span>
      <input class="span8" name="inputEventName" type="text" placeholder="Startup Weekend Boston 2013">
    </div>

    <span class="pull-right">
      <div class="input-prepend">
        <span class="add-on">Where</span>
        <input class="span2" name="inputLocation" type="text" placeholder="Boston, MA">
      </div>    
    </span>

    <br>

    <div class="input-prepend">
      <span class="add-on">Description</span>
      <input class="span8" name="inputDescription" type="text" placeholder="The best Startup Weekend Ever, obviously!">
    </div>

    <span class="pull-right">
      <div class="input-prepend">
        <span class="add-on">Hashtag</span>
        <input class="span2" name="inputHashtag" type="text" placeholder="swboston">
      </div>
    </span>

    <br>
    


    <span class="pull-left">
    <div class="input-prepend">
      <span class="add-on">From</span>
      <input class="span2" name="inputStartDate" type="text" placeholder="mm/dd/yy">
    </div>
    <div class="input-prepend">
      <span class="add-on">To</span>
      <input class="span2" name="inputEndDate" type="text" placeholder="mm/dd/yy">
    </div>
    </span>
    <span class="pull-right">
        <button type="submit" class="btn btn-default btn-primary">Sign Up</button>
    </span>
    <br>

</form>
<br><br>

</div>
</div>
