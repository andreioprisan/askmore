	 <link rel="stylesheet" type="text/css" href="../../public/css/app.css">
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
	 </script>
	 <script>
	 	$(document).ready(function(){
	 		
	 		$("#writeQuestion").click(function(){
	 			$(".addAuthor").show();
	 		});
	 	});
	 </script>
	 <div class="iphoneEmulator">
	 	<div class="questonHeader">
	 		<form action="create_subject.php" method="post">

	 			<input id="writeQuestion" name="questionPosted" type="text" value="Ask a question" onfocus="if (this.value == 'Ask a question') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Ask a question';}">


	 			<input type="submit" name="submitQuestion" value="Go" /> 
	 			<br />
	 			<div class="addAuthor">

	 				<input id="author" name="author1" type="text" value="Your name [optional]" onfocus="if (this.value == 'Your name [optional]') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Your name [optional]';}">

	 			</div>
	 		</form>
	 	</div>
	 	<div class="headerControl">
	 		<div class="logoTiny"><img class="tinyLogoImg" src="../../public/img/AskMoreLogo_tiny.png"></div>
	 		<div>| Top | New</div>
	 	</div>

	 	<div class="questionBlock">
	 		<div class="questionMeta">
	 			<div class="questionNo">1</div>
	 			<div class="questionScore">
	 				<div class="upArrow">
	 					<img src="../../public/img/upArrow.png">
	 				</div>
	 				<div class="questionScore">75</div>
	 				<div class="downArrow">
	 					<img src="../../public/img/downArrow.png">
	 				</div>
	 			</div>
	 		</div>
	 		<div class="userQuestion">
	 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus?</p>
	 			<div class="userName">Annonymous</div>
	 			<div class="borderBottom"></div>
	 		</div>
	 	</div>

	 	<div class="questionBlock">
	 		<div class="questionMeta">
	 			<div class="questionNo">2</div>
	 			<div class="questionScore">
	 				<div class="upArrow">
	 					<img src="../../public/img/upArrow.png">
	 				</div>
	 				<div class="questionScore">75</div>
	 				<div class="downArrow">
	 					<img src="../../public/img/downArrow.png">
	 				</div>
	 			</div>
	 		</div>
	 		<div class="userQuestion">
	 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus?</p>
	 			<div class="userName">Annonymous</div>
	 			<div class="borderBottom"></div>
	 		</div>
	 	</div>

	 	<div class="questionBlock">
	 		<div class="questionMeta">
	 			<div class="questionNo">3</div>
	 			<div class="questionScore">
	 				<div class="upArrow">
	 					<img src="../../public/img/upArrow.png">
	 				</div>
	 				<div class="questionScore">75</div>
	 				<div class="downArrow">
	 					<img src="../../public/img/downArrow.png">
	 				</div>
	 			</div>
	 		</div>
	 		<div class="userQuestion">
	 			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec purus in ante pretium blandit. Aliquam erat volutpat. Nulla libero lectus?</p>
	 			<div class="userName">Annonymous</div>
	 			<div class="borderBottom"></div>
	 		</div>
	 	</div>

	 	<div class="questionBlock">
	 		<div class="questionMeta">
	 			<div class="questionNo">4</div>
	 			<div class="questionScore">
	 				<div class="upArrow">
	 					<img src="../../public/img/upArrow.png">
	 				</div>
	 				<div class="questionScore">75</div>
	 				<div class="downArrow">
	 					<img src="../../public/img/downArrow.png">
	 				</div>
	 			</div>
	 		</div>
	 		<div class="userQuestion">
	 			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, but the majority aa?</p>
	 			<div class="userName">Annonymous</div>
	 			<div class="borderBottom"></div>
	 		</div>
	 	</div>

	 	<div class="questionBlock">
	 		<div class="questionMeta">
	 			<div class="questionNo">5</div>
	 			<div class="questionScore">
	 				<div class="upArrow">
	 					<img src="../../public/img/upArrow.png">
	 				</div>
	 				<div class="questionScore">75</div>
	 				<div class="downArrow">
	 					<img src="../../public/img/downArrow.png">
	 				</div>
	 			</div>
	 		</div>
	 		<div class="userQuestion">
	 			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, but the majority aa?</p>
	 			<div class="userName">Annonymous</div>
	 			<div class="borderBottom"></div>
	 		</div>
	 	</div>

	 	<div class="questionBlock">
	 		<div class="questionMeta">
	 			<div class="questionNo">6</div>
	 			<div class="questionScore">
	 				<div class="upArrow">
	 					<img src="../../public/img/upArrow.png">
	 				</div>
	 				<div class="questionScore">75</div>
	 				<div class="downArrow">
	 					<img src="../../public/img/downArrow.png">
	 				</div>
	 			</div>
	 		</div>
	 		<div class="userQuestion">
	 			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, but the majority aa?</p>
	 			<div class="userName">Annonymous</div>
	 			<div class="borderBottom"></div>
	 		</div>
	 	</div>



	 </div>