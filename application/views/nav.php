<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AskMore</title>

	<link href="public/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="public/css/app.css" rel="stylesheet">
</head>

<html>

<div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav">
  <div class="container">
    <a href="../" class="navbar-brand">ask more now</a>
    <div class="nav-collapse collapse bs-navbar-collapse">
      <?php if (isset($userid) && isset($password) && $userid != 0 && $password != null) { ?>
      <ul class="nav navbar-nav pull-right">
        <li class="">
          <a href="/home">Hi, <?php echo $name ?></a>
        </li>
        <li>
          <a href="/signout">Sign Out</a>
        </li>
      </ul>      
      <?php } else { ?>
      <ul class="nav navbar-nav pull-right">
        <li>
          <a href="/plans">Plans</a>
        </li>
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
</div>

