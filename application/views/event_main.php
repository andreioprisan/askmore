<div class="container">
  <div class="page-header">
    <h1><?php echo $event['name'] ?> <small><font color="black">#<?php echo $event['hashtag'] ?></font> 
      <span class="pull-right"><?php echo $event['location'] ?> <span class="label label-important" style="font-size: 18px; font-weight:100;"><?php echo $event['phone'] ?></span></span>
      </small>
    </h1>
  </div>
    <form class="form-search" action="/question/create/save" method="post">
      <input type="hidden" name="eventid" value="<?php echo $event['eventid'] ?>">
      <input type="hidden" name="backto" value="/<?php echo $event['slug'] ?>">
      <input type="text" class="input-medium search-query span8" maxlength="200" name="question" placeholder="Your Question">
      <input type="text" class="input-medium search-query span2" maxlength="20" name="author" placeholder="Your Name">
      <button type="submit" class="btn btn-primary">Ask Now!</button>
    </form>
  	<?php if (isset($questions) && $questions_count != 0 ) { ?>
    <table class="table">
      <thead>
        <tr>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php if (count($userdata) > 0 && isset($userdata['userid']) &&
              $userdata['userid'] == $event['moderatorid']) { 
                $isModerator = true;
              } else {
                $isModerator = false;
              } 
              $questionnum = 0; ?>
        <?php foreach($questions as $question) { 
          $questionnum++;?>
        <tr>
          <td style="width: 5%; text-align: center;">
            <span data-qid="<?php echo $question->questionid ?>" class="icon-chevron-up upArrowW" style="color: gray; font-size: 20px;"></span><br>
            <span style="font-weight: bold;"><?php echo $question->score ?></span><br>
            <span data-qid="<?php echo $question->questionid ?>" class="icon-chevron-down downArrowW"  style="color: gray; font-size: 20px;"></span>
          </td>
          <td><?php echo $question->text ?><br>
              asked by <b><?php if ($question->author != null) { echo $question->author; } else { echo "anonymous"; } ?></b> via <b><?php echo $question->source ?></b> on  <b><?php echo date('m/d/Y H:i', strtotime($question->createdat)) ?></b>
          </td>
          <td style="width: 5%">
            <?php if ($isModerator) { ?>
              <a href="/question/<?php echo $question->questionid ?>/delete/<?php echo $event['slug'] ?>" class="btn btn-danger">Delete</a>
            <?php } ?>
          </td>
        </tr>
        <?php } ?>
            <script>
    $(document).ready(function(){
      totalvotes = <?php echo $questionnum*2 ?>;
    }); 
    </script>
      </tbody>
    </table>

    <?php } else { ?>
    <div class="alert alert-info">
      Oh noes! There aren't any questions here at this time! Ask one via web, mobile, twitter, voice call or txt message.  
    </div>
    <?php } ?>


</div>
