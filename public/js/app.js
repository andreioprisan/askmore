$(document).ready(function(){
  $("#writeQuestion").click(function(){
    $(".addAuthor").show();
    $(".gap").css("padding-bottom", "125px");
  });

  $(".upArrowW").click(function() {
    if (totalvotes <= 0 || $(this).hasClass('disabled')) {
      return;
    } 

    $(this).css('color','lightgreen');
    $(this).addClass('disabled');

    var currentScore = parseInt($(this).next().next().text());
    $(this).next().next().text(currentScore + 1);
    
    $(this).next().next().next().next().css('color','gray');

    qid = $(this).data("qid");
    if (qid != undefined) {
      $.post('/question/'+qid+'/upvote', function(data) {
      });
    }

    totalvotes--;
  });

  $(".downArrowW").click(function() {
    if (totalvotes <= 0 || $(this).hasClass('disabled')) {
      console.log(totalvotes);
      return;
    } 

    $(this).css('color','red');
    var currentScore = parseInt($(this).prev().prev().text());
    $(this).prev().prev().text(currentScore - 1);
    $(this).addClass('disabled');
    
    $(this).prev().prev().prev().prev().css('color','gray');

    qid = $(this).data("qid");
    if (qid != undefined) {
      $.post('/question/'+qid+'/downvote', function(data) {
      });
    }

    totalvotes--;
  });
});