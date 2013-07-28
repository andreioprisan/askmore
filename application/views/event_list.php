<div class="container">

  <div class="page-header">
    <h1>events <small>all in one place</small>
      <a class="btn btn-large btn-block btn-primary span1 pull-right" type="button" href="/event/create">New</a>
  </h1>
  </div>

	<br><br>
<?php if (isset($eventsList) && count($eventsList) != 0 ) { ?>
	<table class="table">
    <thead>
      <tr>
        <th>Event Name</th>
        <th>Location</th>
        <th>Hashtag</th>
        <th>Phone #</th>
        <th>Starting</th>
        <th>Ending</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($eventsList as $event) { ?>
      <tr>
        <td><a href="/<?php echo $event->slug ?>"><?php echo $event->name ?></a></td>
        <td><?php echo $event->location ?></td>
        <td><?php echo $event->hashtag; ?></td>
        <td><?php echo $event->phone ?></td>
        <td><?php echo date('m/d/Y', strtotime($event->startdate)) ?></td>
        <td><?php echo date('m/d/Y', strtotime($event->enddate)) ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } else { ?>

<?php } ?>

</div>
