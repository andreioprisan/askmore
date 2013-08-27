<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AskMore - AskBetter</title>
  <meta name="description" content="AskMore is a webapp that allows you to ask questions during live events via web, sms, twitter and email. Whether you are in attendance or not able to attend an event, your questions will reach the event even when you couldn't. Ask More - Ask Better.">
	<link href="/public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/public/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="/public/css/font-awesome.min.css" rel="stylesheet">
  <link href="/public/css/app.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>  
  <script src="/public/js/app.js"></script>
  <script src="/public/js/moment.min.js"></script>
  <script src="/public/js/lodash.min.js"></script>
  
</head>
<body>
<div class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="/">Askmore - real-time questions during your event</a>

      <?php if (isset($userid) && isset($password) && $userid != 0 && $password != null) { ?>
      <ul class="nav pull-right">
        <li class="">
          <a href="/event/list">Events</a>
        </li>

        <li class="">
          <a href="/home">Hi, <?php echo $name ?></a>
        </li>
        <li>
          <a href="/signout">Sign Out</a>
        </li>
      </ul>      
      <?php } else { ?>
      <ul class="nav pull-right">
        <li class="">
          <a href="/login">Login</a>
        </li>
        <li>
          <a href="/signup">Sign Up</a>
        </li>
      </ul>
      <?php } ?>

  </div>
</div>


