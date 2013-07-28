<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AskMore</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/public/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="/public/css/app.css" rel="stylesheet">
    <link href="/public/css/font-awesome.min.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){
			$("#writeQuestion").click(function(){
				$(".addAuthor").show();
				$(".gap").css("padding-bottom", "125px");
			});

      $(".upArrowW").click(function() {
        if (totalvotes <= 0 || $(this).hasClass('disabled')) {
          console.log(totalvotes);
          return;
        } 

        console.log("up");

        $(this).css('color','lightgreen');
        $(this).addClass('disabled');

        var currentScore = parseInt($(this).next().next().text());
        $(this).next().next().text(currentScore + 1);
        
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

        console.log("down");

        $(this).css('color','red');
        var currentScore = parseInt($(this).prev().prev().text());
        $(this).prev().prev().text(currentScore - 1);
        $(this).addClass('disabled');
        
        qid = $(this).data("qid");
        if (qid != undefined) {
          $.post('/question/'+qid+'/downvote', function(data) {
          });
        }

        totalvotes--;
      });
		});
	</script>
	<style type="text/css">
	body{padding:1px}
	form{margin:0}</style>
	<!--
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
	-->
</head>