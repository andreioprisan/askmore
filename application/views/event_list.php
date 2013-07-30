<div class="container">

  <div class="page-header">
    <h1>events <small>all in one place</small>
      <a class="btn btn-large btn-block btn-primary span1 pull-right" type="button" href="/event/create">New</a>
  </h1>
  </div>

	<br><br>
<?php if (isset($eventsList) && count($eventsList) != 0 && $eventsList[0] != false) { ?>
	<table class="table">
    <thead>
      <tr>
        <th>Event Name</th>
        <th>Location</th>
        <th>Hashtag</th>
        <th>Phone #</th>
        <th>Starting</th>
        <th>Ending</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach($eventsList as $event) { ?>
      <tr>
        <td><a href="/<?php echo $event->slug ?>"><?php echo $event->name ?></a></td>
        <td><?php echo $event->location ?></td>
        <td><?php echo $event->hashtag; ?></td>
        <td><?php echo $event->phone ?></td>
        <td><?php echo date('m/d/Y', strtotime($event->startdate)) ?></td>
        <td><?php echo date('m/d/Y', strtotime($event->enddate)) ?></td>
        <td width="5%">
          <a class="btn btn-danger btn-small pull-right" type="button" href="/event/delete/<?php echo $event->eventid ?>">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } else { ?>
    <div class="alert alert-info">
      Oh noes! There aren't any events here at this time! Create one with the button up top!
    </div>

<?php } ?>

</div>
