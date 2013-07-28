<div class="container">
  <div class="page-header">
    <h1><?php echo $event['name'] ?> <small><font color="black">#<?php echo $event['hashtag'] ?></font> 
      <span class="pull-right"> <span class="label label-important" style="font-size: 18px; font-weight:100;"><?php echo $event['phone'] ?></span> <?php echo $event['location'] ?></span>
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
  	<?php 
    $questionnum = 0;
    if (isset($questions) && $questions_count != 0 ) { ?>
    <table class="table">
      <thead>
        <tr>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody id="mainList">
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
          <td style="width: 5%; text-align: center;" id="<?php echo $question->questionid ?>" data-score="<?php echo $question->score ?>">
            <span data-first="1" data-qid="<?php echo $question->questionid ?>" class="icon-chevron-up upArrowW" style="color: gray; font-size: 20px;"></span><br>
            <span class="questionScore" style="font-weight: bold;"><?php echo $question->score ?></span><br>
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

<?php if ($questionnum > 0) { ?>

<script>
window.setInterval(function(){

  $.get('/question/updatedsince/'+lastupdated+'/<?php echo $event['eventid'] ?>">', function(data) {
    if (_.size(data.updates) > 0) {
      _.each(data.updates, function(item) {
        $('#'+item.q+' .questionScore').fadeOut();
        $('#'+item.q+' .questionScore').text(item.score);
        $('#'+item.q+' .questionScore').fadeIn();
        $('#'+item.q+'');

        a = $('#'+item.q+'').parent().prev().first();
        s1 = '<td style="width: 5%; text-align: center;" id="';
        s2 = '" data-score="';
        s3 = '<span data-first=';
        
        x1 = a.html().indexOf(s1);
        x2 = a.html().indexOf(s2);
        x3 = a.html().indexOf(s3);

        eventid = a.html().substr(x1+s1.length, x2-(x1+s1.length));
        score = a.html().substr(x2+s2.length, (x2+s2.length)-(x3-s3.length));

        if (score < item.score) {
          //move our item up
          $('#'+item.q+'').parent().after($('#'+item.q+'').parent().prev());
        } 


        a = $('#'+item.q+'').parent().next().first();
        s1 = '<td style="width: 5%; text-align: center;" id="';
        s2 = '" data-score="';
        s3 = '<span data-first=';
        
        x1 = a.html().indexOf(s1);
        x2 = a.html().indexOf(s2);
        x3 = a.html().indexOf(s3);

        eventid = a.html().substr(x1+s1.length, x2-(x1+s1.length));
        score = a.html().substr(x2+s2.length, (x2+s2.length)-(x3-s3.length));

        if (score > item.score) {
          //move our item up
          $('#'+item.q+'').parent().before($('#'+item.q+'').parent().next());
        } 

      });
    } 

    if (_.size(data.new) > 0) {
      _.each(data.new, function(item) {
        if (_.size($('#'+item.questionid)) == 0) {
          var newdom = '<tr>\
              <td style="width: 5%; text-align: center; display:none" id="'+item.questionid+'">\
                <span data-first="1" data-qid="'+item.questionid+'" class="icon-chevron-up upArrowW" style="color: gray; font-size: 20px;"></span><br>\
                <span class="questionScore" style="font-weight: bold; display: inline;">'+item.score+'</span><br>\
                <span data-qid="'+item.questionid+'" class="icon-chevron-down downArrowW" style="color: gray; font-size: 20px;"></span>\
              </td>\
              <td>'+item.text+'<br>\
                  asked by <b>'+item.author+'</b> via <b>'+item.source+'</b> on  <b>'+item.createdat+'</b>\
              </td>\
              <td style="width: 5%">\
              </td>\
            </tr>';

          $('*[data-score="'+item.score+'"]').first().parent().before(newdom);
          $('#'+item.questionid).fadeIn();
          $('#'+item.questionid).parent().fadeIn();
        } else {
          //return;
        }
      });
    }

    lastupdated = moment().unix();
  });

}, 3000);

</script>
<?php } ?>
</div>
