<?php include "header.php" ?>

<div class="governments-background">


<section class="container container-quiz">


<h1>Climate breakdown quiz</h1>



	<div class="container text-center  quiz-header">

		<ul id="quiz" class="list-group">
      <p class="quiz-explaination-para">It's now time to test yourself on how your daily activities impact climate change ! <br>
      Please click on each button that reflect the most what you think without overthinking it.</p>

		</ul>
	</div>

<a href="#" id="start" class="start-button">Let's Begin</a>
<br/>

<div class="well jumbotron">
  <h3 id="question"></h3>
  <br/><br/>
  <form id="form">

  </form>
  <br/>
  <a href="#" id="next" class="button">Next</a><br/>
  <div id="progressbar" class="progress-bar progress-bar-striped"></div>
</div>
<div id="result"></div>
<img class="quiz-img" src="img/pexels-photo-414837.jpeg" alt="wind power picture">
</section>
<?php include "footer.php" ?>
<script type="text/javascript">

function QuizQuestion(question, choices, correctAnswer){
  this.question = question;
  this.choices = choices;
  this.correctAnswer = correctAnswer;
}

var allQuestions = [
  new QuizQuestion("How concerned do you feel about Global warming?",["Very concerned", "Pretty concerned", "Not really concerned", "Not concerned at all"],0),
  new QuizQuestion("How do you commute to school/work?",["I walk or bike there", "I carpool or use public transports", "I drive there"],0),
  new QuizQuestion("Do you practice 0 waste?",[ "Nope", "Here and there, I reuse glass jars", "I try to limit it and use reusable cloths", "I totally master it"],3),
  new QuizQuestion("How do you shop for your groceries?",["I like junk food like chips and soda", "I enjoy to have a huge variety of products", "I shop seasonal food", "I tend to shop locally, seasonal and organic as much as possible"],3),
  new QuizQuestion("What is your typical behaviour during extreme temperatures?",["Heat and AC all the way, I cannot live without it", "I try to survive but often rely on heat or AC","I dress accordingly" ],2),

  new QuizQuestion("What about your cleaning products?",["I need a strong one to avoid scrubbing", "I get random ones from the supermarket", "I get green or eco-friendly ones","I make my own products"],3),
  new QuizQuestion("How often do you eat meat? ",["Every day, multiple time a day", "3-5 times a week", "Once or twice a week","I am vegetarian/vegan"],0),
  new QuizQuestion("What's your typical behaviour regarding lighting?",["I don't mind when it's a little dark in the morning and at night", "I like artificial light but I use eco-friendly bulbs", "I need good lighting at all time"],2),

  new QuizQuestion("How do you clean yourself?",["I use lukewarm water and do quick showers", "I like my long warm shower at least twice a day", "I enjoy long baths"],2),
  new QuizQuestion("Where do you keep your notes, meetings and reminders?",["On my phone or laptop", "On multiple sticky notes", "I keep them in a notebook "],0),

];

var currentquestion = 0;
var correctAnswers = 0;

function setupOptions() {
  $('#question').html(parseInt(currentquestion) + 1 + ". " + allQuestions[currentquestion].question);
  var options = allQuestions[currentquestion].choices;
  var formHtml = '';
  for (var i = 0; i < options.length; i++) {
    formHtml += '<div><input type="radio" name="option" value="' + i + '" class="options"><label for="option' + i + '">' + options[i] + '</label></div><br/>';
  }
  $('#form').html(formHtml);
  $(".options:eq(0)").prop('checked', true);
}

function checkAns() {
  if ($("input[name=option]:checked").val() == allQuestions[currentquestion].correctAnswer) {
    correctAnswers++;
  }
}

$(document).ready(function(){

  var $jumbotron = $(".jumbotron");
  var $start = $("#start");
  var $progressbar = $("#progressbar");
  var $next = $("#next");
  var $result = $("#result");

	$jumbotron.hide();
	$start.click(function() {
	    $jumbotron.fadeIn();
	    $(this).hide();
  	});

	$(function() {
		$progressbar.progressbar({
			max: allQuestions.length-1,
			value: 0
		});
	});

	setupOptions();

	$next.click(function(){
			event.preventDefault();
			checkAns();
			currentquestion++;
			$(function() {
    			$progressbar.progressbar({
      				value: currentquestion
    			});
  			});
			if(currentquestion<allQuestions.length){
				setupOptions();
				if(currentquestion==allQuestions.length-1){
					$next.html("Submit");
					$next.click(function(){
						$jumbotron.hide();
            if(correctAnswers > 7){
            console.log("hello");
            $result.html("You are doing great! <br> <br>  You know everything about climate change, global warming and the current breakdown and you do everything you can think of to reverse this. <br>  <br> Congratulations and keep going.");
      }else if(correctAnswers < 4){
        $result.html("You are not there yet!  <br>  <br> You like your personal comfort, which is okay, but you can improve your lifestyle step by step to help reversing climate breakdown.  <br>  <br> It is possible if we all do something and it starts with you! Please check out the Lifestyle page to check out what you can change in your daily life, one step at the time.");
}else{
  $result.html("You are doing good! <br>  <br>  You know some things about climate change and you are reducing your carbon footprint by doing some minor changes without totally giving up your personal comfort.  <br>  <br> This is good but you could go further. Check out the lifestyle page to see how you can improve!")
}
						//$result.html("You correctly answered " + correctAnswers + " out of " + currentquestion + " questions! ").hide();

						$result.fadeIn(1500);
					});
				}
			};
	});
});

</script>

<style media="screen">

.container-quiz{
  padding-top: 5%;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
  display:block;
}

nav ul {
  list-style:none;
}

blockquote, q {
  quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
  content:'';
  content:none;
}


.ui-widget-header {
  background-image: none !important;
  background-color: #f4decb !important;
}

label{
display: inline;
}

h3, #next {
text-align: center;
display: inline-block;
border-radius: 10%;
}

input[name="option"] {
float:left;

}




#progressbar {
float: none;
margin: auto;
margin-top: 20px;
margin-left: 2%;
width: 50%;
}

input, select {
  vertical-align:middle;
}

.button {
  display: inline-block;
  padding: 10px 15px;
  background-color: #86B3DF;
  text-decoration: none !important;
  color: white !important;

}
.button:hover{
	  background-color: #6586A7;
		      transition: all 1s ease-out;
}

body{
text-align: center;
}

.progress-bar {
float: left;
width: 0;
/*height: 100%;*/
font-size: 12px;
line-height: 20px;
color: #fff;
text-align: center;
background-color: #337ab7;
-webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
-webkit-transition: width .6s ease;
     -o-transition: width .6s ease;
        transition: width .6s ease;
}


input {
  -webkit-appearance: none; /* remove default */
  display: block;
  margin: 10px;
  width: 24px;
  height: 24px;
  border-radius: 12px;
  cursor: pointer;
  vertical-align: middle;
  box-shadow: hsla(0,0%,100%,.15) 0 1px 1px, inset hsla(0,0%,0%,.5) 0 0 0 1px;
  background-color: white;
  background-image: -webkit-radial-gradient( hsla(210, 100%, 32%, 1) 40%, hsla(0,0%,100%,1) 50%, hsla(0,0%,100%,.3) 60%, hsla(0,0%,100%,.3) 0% );
  background-repeat: no-repeat;
  -webkit-transition: background-position .15s cubic-bezier(.8, 0, 1, 1),
    -webkit-transform .25s cubic-bezier(.8, 0, 1, 1);
  outline: none;
}
input:checked {
  -webkit-transition: background-position .2s .15s cubic-bezier(0, 0, .2, 1),
    -webkit-transform .25s cubic-bezier(0, 0, .2, 1);
}
input:active {
  -webkit-transform: scale(1.5);
  -webkit-transition: -webkit-transform .1s cubic-bezier(0, 0, .2, 1);
}



/* The up/down direction logic */

input,
input:active {
  background-position: 0 24px;
}
input:checked {
  background-position: 0 0;
}
input:checked ~ input,
input:checked ~ input:active {
  background-position: 0 -24px;
}

</style>
