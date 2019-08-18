<?php include "header.php" ?>

<div class="governments-background">


<section class="container">


<h1 style="padding-top: 7%;">Climate breakdown quiz</h1>



	<div class="container text-center  quiz-header">

		<ul id="quiz" class="list-group">
      <p class="quiz-explaination-para">It's now time to test yourself on how your daily activities impact climate change ! <br>
      Please click on each button that reflect the most what you think without overthinking it.</p>
      
		</ul>
	</div>


	<div class="container text-center results hide">
		<p id="results"></p>
	</div>

	<div class="container  bottom">
		<button id="submit-btn" class="quiz-submit-btn btn-lg">Submit</button>

		<button id="retake-btn" class="hide btn-primary quiz-submit-btn btn-lg" onClick="window.location.reload();">Retake Quiz</button>
	</div>
</section>
</div>
<script type="text/javascript">
// A personality quiz

// This is an array of objects that stores the personality trait that is prompted to the user and the weight for each prompt.
// If a personality trait is considered more introverted, it will have a negative weight.
// If a personlity trait is considered more extroverted, it will have a positive weight.

var prompts = [
{
	prompt: 'I tend to use my car, even if I can walk or bike to commute',
	weight: -1,
	class: 'group0'
},
{
	prompt: 'I tend to fly multiple times a year for vacation or business purposes',
	weight: -1,
	class: 'group1'
},
{
	prompt: 'I like to have paper on hand to take notes rather than using my computer or phone',
	weight: -1,
	class: 'group2'
},
{
	prompt: 'I enjoy a long warm bath by the end of the day',
	weight: -1,
	class: 'group3'
},
{
	prompt: 'I need good lighting at all time',
	weight: -1,
	class: 'group4'
},
{
	prompt: 'I like to eat meat often',
	weight: -1,
	class: 'group5'
},
{
	prompt: 'I try to eat seasonal food and shop locally',
	weight: 1,
	class: 'group6'
},
{
	prompt: 'I try to stay away from AC whenever possible',
	weight: 1,
	class: 'group7'
},
{
	prompt: 'I try to avoid plastic whenever possible',
	weight: 1,
	class: 'group8'
},
{
	prompt: 'I enjoy to reuse things (glass jars, containers) whever possible',
	weight: 1,
	class: 'group9'
},
{
	prompt: 'I pay attention to using eco-friendly cleaning products',
	weight: 1,
	class: 'group10'
},
{
	prompt: 'I feel concerned about climate breakdown',
	weight: 1,
	class: 'group11'
}

]

// This array stores all of the possible values and the weight associated with the value.
// The stronger agreeance/disagreeance, the higher the weight on the user's answer to the prompt.
var prompt_values = [
{
	value: 'Strongly Agree',
	class: 'btn-default btn-strongly-agree',
	weight: 5
},
{
	value: 'Agree',
	class: 'btn-default btn-agree',
	weight: 3,
},
{
	value: 'Neutral',
	class: 'btn-default',
	weight: 0
},
{
	value: 'Disagree',
	class: 'btn-default btn-disagree',
	weight: -3
},
{
	value: 'Strongly Disagree',
	class: 'btn-default btn-strongly-disagree',
	weight: -5
}
]

// For each prompt, create a list item to be inserted in the list group
function createPromptItems() {

	for (var i = 0; i < prompts.length; i++) {
		var prompt_li = document.createElement('li');
		var prompt_p = document.createElement('p');
		var prompt_text = document.createTextNode(prompts[i].prompt);

		prompt_li.setAttribute('class', 'list-group-item prompt');
		prompt_p.appendChild(prompt_text);
		prompt_li.appendChild(prompt_p);

		document.getElementById('quiz').appendChild(prompt_li);
	}
}

// For each possible value, create a button for each to be inserted into each li of the quiz
// function createValueButtons() {

// 	for (var li_index = 0; li_index < prompts.length; li_index++) {
// 		for (var i = 0; i < prompt_values.length; i++) {
// 			var val_button = document.createElement('button');
// 			var val_text = document.createTextNode(prompt_values[i].value);

// 			val_button.setAttribute('class', 'value-btn btn ' + prompt_values[i].class);
// 			val_button.appendChild(val_text);

// 			document.getElementsByClassName('prompt')[li_index].appendChild(val_button);
// 		}
// 	}
// }
function createValueButtons() {
	for (var li_index = 0; li_index < prompts.length; li_index++) {
		var group = document.createElement('div');
		group.className = 'btn-group btn-group-justified';

		for (var i = 0; i < prompt_values.length; i++) {
			var btn_group = document.createElement('div');
			btn_group.className = 'btn-group';

			var button = document.createElement('button');
			var button_text = document.createTextNode(prompt_values[i].value);
			button.className = 'group' + li_index + ' value-btn ' + prompt_values[i].class;
			button.appendChild(button_text);

			btn_group.appendChild(button);
			group.appendChild(btn_group);

			document.getElementsByClassName('prompt')[li_index].appendChild(group);
		}
	}
}

createPromptItems();
createValueButtons();

// Keep a running total of the values they have selected. If the total is negative, the user is introverted. If positive, user is extroverted.
// Calculation will sum all of the answers to the prompts using weight of the value * the weight of the prompt.
var total = 0;

// Get the weight associated to group number
function findPromptWeight(prompts, group) {
	var weight = 0;

	for (var i = 0; i < prompts.length; i++) {
		if (prompts[i].class === group) {
			weight = prompts[i].weight;
		}
	}

	return weight;
}

// Get the weight associated to the value
function findValueWeight(values, value) {
	var weight = 0;

	for (var i = 0; i < values.length; i++) {
		if (values[i].value === value) {
			weight = values[i].weight;
		}
	}

	return weight;
}

// When user clicks a value to agree/disagree with the prompt, display to the user what they selected
$('.value-btn').mousedown(function () {
	var classList = $(this).attr('class');
	// console.log(classList);
	var classArr = classList.split(" ");
	// console.log(classArr);
	var this_group = classArr[0];
	// console.log(this_group);

	// If button is already selected, de-select it when clicked and subtract any previously added values to the total
	// Otherwise, de-select any selected buttons in group and select the one just clicked
	// And subtract deselected weighted value and add the newly selected weighted value to the total
	if($(this).hasClass('active')) {
		$(this).removeClass('active');
		total -= (findPromptWeight(prompts, this_group) * findValueWeight(prompt_values, $(this).text()));
	} else {
		// $('[class='thisgroup).prop('checked', false);
		total -= (findPromptWeight(prompts, this_group) * findValueWeight(prompt_values, $('.'+this_group+'.active').text()));
		// console.log($('.'+this_group+'.active').text());
		$('.'+this_group).removeClass('active');

		// console.log('group' + findValueWeight(prompt_values, $('.'+this_group).text()));
		// $(this).prop('checked', true);
		$(this).addClass('active');
		total += (findPromptWeight(prompts, this_group) * findValueWeight(prompt_values, $(this).text()));
	}

	console.log(total);
})



$('#submit-btn').click(function () {
	// After clicking submit, add up the totals from answers
	// For each group, find the value that is active
	$('.results').removeClass('hide');
	$('.results').addClass('show');

	if(total < 0) {
		// document.getElementById('intro-bar').style.width = ((total / 60) * 100) + '%';
		// console.log(document.getElementById('intro-bar').style.width);
		// document.getElementById('intro-bar').innerHTML= ((total / 60) * 100) + '%';
		document.getElementById('results').innerHTML = '<b class="quiz-result-title">You are not there yet!</b><br><br>\
    You like your personal comfort and enjoy avoiding taking heads. It is okay, but you can improve your lifestyle step by step tohelp reversing climate breakdown. It is possible if we all do something and it starts by you ! \n\
<br><br>\
    Please check out the "Lifestyle" page to check out what you can change in your daily life, sone step at the time.\
		'
	} else if(total > 0) {
		document.getElementById('results').innerHTML = '<b class="quiz-result-title">You are doing great!</b><br><br>\
		  You know everything about climate change, global warming and the current breakdown and you do everything you can think of to reverse this.\
<br><br>\
Congratulations and keep going.';
	} else {
		document.getElementById('results').innerHTML = '<b class="quiz-result-title">You are doing good!</b><br><br>\
		    You know some things about climate change and you are reducing your carbon footprint by doing some minor changes without totally giving up your personal comfort. This is good but you could go further.\
<br><br>\
Check out the lifestyle page to see how you can improve!'
	}

	// Hide the quiz after they submit their results
	$('#quiz').addClass('hide');
	$('#submit-btn').addClass('hide');
	$('#retake-btn').removeClass('hide');
})

// Refresh the screen to show a new quiz if they click the retake quiz button
$('#retake-btn').click(function () {
	$('#quiz').removeClass('hide');
	$('#submit-btn').removeClass('hide');
	$('#retake-btn').addClass('hide');

	$('.results').addClass('hide');
	$('.results').removeClass('show');
})

</script>


<?php include "footer.php" ?>
