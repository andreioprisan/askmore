<div class="container">

  <div class="page-header">
    <h1><?php echo $event['name'] ?> <small><font color="black">#<?php echo $event['hashtag'] ?></font> 
      <span class="pull-right"><?php echo $event['location'] ?> <span class="label label-important" style="font-size: 18px; font-weight:100;"><?php echo $event['phone'] ?></span></span>
      </small>
    </h1>
  </div>
  	<?php if (isset($questions) && $questions_count != 0 ) { ?>
    <table class="table">
      <thead>
        <tr>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($questions as $question) { ?>
        <tr>
          <td style="width: 5%"><?php echo $question->score ?></td>
          <td><?php echo $question->text ?><br>
              via <b><?php echo $question->source ?></b> from <b><?php echo $question->author ?></b>
              </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <?php } else { ?>
    <div class="alert alert-info">
      Oh noes! There aren't any questions here at this time! Ask one via web, mobile, twitter, voice call or txt message.  
    </div>
    <?php } ?>


</div>
