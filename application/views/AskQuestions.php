<body>



	<script>
		$(document).ready(function(){

			$("#writeQuestion").click(function(){
				$(".addAuthor").show();
				$(".gap").css("padding-bottom", "125px");
			});

			$(".upArrow").click(function() {
				$(this).find('.upArrowImg').attr("src", "http://askmorenow.com/public/img/upArrow_active.jpg") ;
				var currentScore = parseInt($(this).next().text());
				$(this).next().text(currentScore + 1);
				$(this).next().next().find('.downArrowImg').attr("src", "http://askmorenow.com/public/img/downArrow.jpg") ;
			});

			$(".downArrow").click(function() {
				$(this).find('.downArrowImg').attr("src", "http://askmorenow.com/public/img/downArrow_active.jpg") ;
				var currentScore = parseInt($(this).prev().text());
				$(this).prev().text(currentScore - 1);
				$(this).prev().prev().find('.upArrowImg').attr("src", "http://askmorenow.com/public/img/upArrow.jpg") ;

			});
		});
	</script>


	<div class="iphoneEmulator">
		<div class="topnav1">
			<div class="headerControl">
				<div class="logoTiny"><img class="tinyLogoImg" src="public/img/AskMoreLogo_tiny.jpg"></div>
				<div id="sort">Sort: <a class="sortHref" href="#">Top</a> | <a href="#" class="sortHref">New</a></div>
			</div>
			<div class="questonHeader">
				<form action="create_subject.php" method="post">

					<input id="writeQuestion" name="questionPosted" type="text" value="Ask a question" onfocus="if (this.value == 'Ask a question') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Ask a question';}" maxlength="140">

					<div class="addAuthor">
						<input id="authorInput" name="author1" type="text" value="Your name [optional]" onfocus="if (this.value == 'Your name [optional]') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Your name [optional]';}">
						<input type="submit" class="submitButton" name="submitQuestion" value="Go" /> 

					</div>
				</form>
			</div>
		</div>
		<div class="gap"></div>


		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">1</div>
				<div class="questionScoreDivDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">75</div>
					<div class="downArrow">
						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus?</p>
				<div class="userName">Annonymous</div>
			</div>
		</div>
		<div class="borderBottom"></div>

		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">2</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">65</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus?</p>
				<div class="userName">Jay who never showed up</div>
			</div>
		</div>
		<div class="borderBottom"></div>

		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">3</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">40</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. ?</p>
				<div class="userName">Jeff who left us</div>
			</div>
		</div>
		<div class="borderBottom"></div>

		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">4</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">30</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet?</p>
				<div class="userName">Trail Mix</div>
			</div>
		</div>
		<div class="borderBottom"></div>
		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">5</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">25</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec ?</p>
				<div class="userName">George Zimmerman</div>
			</div>
		</div>
		<div class="borderBottom"></div>

		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">1</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">19</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus?</p>
				<div class="userName">Annonymous</div>
			</div>
		</div>
		<div class="borderBottom"></div>

		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">2</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">18</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus?</p>
				<div class="userName">Jay who never showed up</div>
			</div>
		</div>
		<div class="borderBottom"></div>

		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">3</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">15</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. ?</p>
				<div class="userName">Jeff who left us</div>
			</div>
		</div>
		<div class="borderBottom"></div>

		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">4</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">11</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet?</p>
				<div class="userName">Trail Mix</div>
			</div>
		</div>
		<div class="borderBottom"></div>
		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">5</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">10</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec ?</p>
				<div class="userName">George Zimmerman</div>
			</div>
		</div>
		<div class="borderBottom"></div>
		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">1</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">8</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus?</p>
				<div class="userName">Annonymous</div>
			</div>
		</div>
		<div class="borderBottom"></div>

		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">2</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">7</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus?</p>
				<div class="userName">Jay who never showed up</div>
			</div>
		</div>
		<div class="borderBottom"></div>

		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">3</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">5</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. ?</p>
				<div class="userName">Jeff who left us</div>
			</div>
		</div>
		<div class="borderBottom"></div>

		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">4</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">1</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet?</p>
				<div class="userName">Trail Mix</div>
			</div>
		</div>
		<div class="borderBottom"></div>
		<div class="questionBlock">
			<div class="questionMeta">
				<div class="questionNo">5</div>
				<div class="questionScoreDiv">
					<div class="upArrow">
						<img class="upArrowImg" src="public/img/upArrow.jpg">
					</div>
					<div class="questionScoreDiv">1</div>
					<div class="downArrow">

						<img class="downArrowImg" src="public/img/downArrow.jpg">
					</div>
				</div>
			</div>
			<div class="userQuestion">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec ?</p>
				<div class="userName">George Zimmerman</div>
			</div>
		</div>
		<div class="borderBottom"></div>

	</div>
</body>



