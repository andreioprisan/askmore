<body>



	<script>
		$(document).ready(function(){

			$("#writeQuestion").click(function(){
				$(".addAuthor").show();
				$(".gap").css("padding-bottom", "125px");
			});

			$(".upArrow").click(function() {
				$(this).find('.upArrowImg').attr("src", "http://askmo.re/public/img/upArrow_active.jpg") ;
				var currentScore = parseInt($(this).next().text());
				$(this).next().text(currentScore + 1);
				$(this).next().next().find('.downArrowImg').attr("src", "http://askmo.re/public/img/downArrow.jpg") ;
			});

			$(".downArrow").click(function() {
				$(this).find('.downArrowImg').attr("src", "http://askmo.re/public/img/downArrow_active.jpg") ;
				var currentScore = parseInt($(this).prev().text());
				$(this).prev().text(currentScore - 1);
				$(this).prev().prev().find('.upArrowImg').attr("src", "http://askmo.re/public/img/upArrow.jpg") ;

			});
		});
	</script>


	<div class="iphoneEmulator">
		<div class="topnav1">
			<div class="headerControl">
				<div class="logoTiny"><img class="tinyLogoImg" src="/public/img/AskMoreLogo_tiny.png"></div>
				<div id="sort">Sort: <a class="sortHref" href="#">Top</a> | <a href="#" class="sortHref">New</a></div>
			</div>
			<div class="questonHeader">
				<form action="/question/create/save" method="post">
					<input type="hidden" name="eventid" value="<?php echo $event['eventid'] ?>">
					<input type="hidden" name="backto" value="/<?php echo $event['slug'] ?>">
					<input id="writeQuestion" name="question" type="text" value="Ask a question" onfocus="if (this.value == 'Ask a question') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Ask a question';}" maxlength="140">
					<div class="addAuthor">
						<input id="authorInput" name="author" type="text" value="Your name [optional]" onfocus="if (this.value == 'Your name [optional]') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Your name [optional]';}">
						<input type="submit" class="submitButton" name="submitQuestion" value="Go" /> 
					</div>
				</form>
			</div>
		</div>
		<div class="gap"></div>

	  	<?php if (isset($questions) && $questions_count != 0 ) { 
	  		$questionnum = 0;?>
	        <?php foreach($questions as $question) { 
	        	$questionnum++;?>

				<div class="questionBlock">
					<div class="questionMeta">
						<div class="questionNo"><?php echo $questionnum ?></div>
						<div class="questionScoreDivDiv">
							<div class="upArrow">
								<img class="upArrowImg" src="public/img/upArrow.jpg">
							</div>
							<div class="questionScoreDiv"><?php echo $question->score ?></div>
							<div class="downArrow">
								<img class="downArrowImg" src="public/img/downArrow.jpg">
							</div>
						</div>
					</div>
					<div class="userQuestion">
						<p><?php echo $question->text ?></p>
						<div class="">asked by <b><?php echo $question->author ?></b> via <b><?php echo $question->source ?></b> on  <b><?php echo date('m/d/Y H:i', strtotime($question->createdat)) ?></b></div>
					</div>
				</div>
				<div class="borderBottom"></div>
	        <?php } ?>
	    <?php } else { ?>
	    <div class="alert alert-info">
	      Oh noes! There aren't any questions here at this time! Ask one via web, mobile, twitter, voice call or txt message.  
	    </div>
	    <?php } ?>

	</div>
</body>



