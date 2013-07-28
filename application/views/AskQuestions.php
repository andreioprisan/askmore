<body>
	<div class="iphoneEmulator">
		<div class="topnav1">
			<div class="headerControl">
				<div class="logoTiny"><img class="tinyLogoImg" src="/public/img/AskMoreLogo_tiny.png"></div>
				<div id="sort" class="">Sort: 
					<?php
					$sorts = array('top', 'new','both');
					foreach ($sorts as $sort) { 
						if ($sort == $thissort) { ?>
							<a class="sortHref" href="/<?php echo $event['slug'] ?>?sort=<?php echo $sort;?>" style="color: black;"><?php echo ucfirst($sort);?></a> 
							<?php if ($sort != "both") { echo "|"; } ?>
						<?php } else { ?>
							<a class="sortHref" href="/<?php echo $event['slug'] ?>?sort=<?php echo $sort;?>"><?php echo ucfirst($sort);?></a>
							<?php if ($sort != "both") { echo "|"; } ?>
						<?php } ?>
					<?php
					} ?>
			</div>
			<br>
			<div class="questonHeader">
				<form action="/question/create/save" method="post">
					<input type="hidden" name="source" value="mobile">
					<input type="hidden" name="eventid" value="<?php echo $event['eventid'] ?>">
					<input type="hidden" name="backto" value="/<?php echo $event['slug'] ?>">
					<input style="margin-left: 5px;" id="writeQuestion" name="question" type="text" value="Ask a question" onfocus="if (this.value == 'Ask a question') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Ask a question';}" maxlength="140">
					
					<div class="addAuthor input-prepend input-append">
					  	<span class="add-on">optional</span>
						<input class="span1"  style=""  id="authorInput" name="author" type="text" value="Your name [optional]" onfocus="if (this.value == 'Your name [optional]') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Your name [optional]';}">

						<input type="submit" style="margin-left: 5px" class="submitButton" name="submitQuestion" value="Go" class="btn btn-primary" /> 
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
						<div class="questionNo">&nbsp;<?php #echo $questionnum ?></div>
						<div class="questionScoreDivDiv" style="text-align: center;">
				            <span data-qid="<?php echo $question->questionid ?>" class="icon-chevron-up upArrowW" style="color: gray; font-size: 20px;"></span><br>
				            <span style="font-weight: bold;"><?php echo $question->score ?></span><br>
				            <i data-qid="<?php echo $question->questionid ?>" class="icon-chevron-down downArrowW"  style="color: gray; font-size: 20px;"></i>
						</div>
					</div>
					<div class="userQuestion">
						<p><?php echo $question->text ?></p>
						<div class="" style="font-size: 80%">asked by <b><?php echo $question->author ?></b> via <b><?php echo $question->source ?></b> on <b><?php echo date('m/d/y h:iA', strtotime($question->createdat)) ?></b></div>
					</div>
				</div>
				<div class="borderBottom"></div>
			<!--<div class="gap"></div>-->

	        <?php } ?>

		<script>
		$(document).ready(function(){
			totalvotes = <?php echo $questionnum*2 ?>;
		}); 
		</script>
	    <?php } else { ?>
	    <div class="alert alert-info">
	      Oh noes! There aren't any questions here at this time! Ask one via web, mobile, twitter, voice call or txt message.  
	    </div>
	    <?php } ?>

	</div>
</body>



