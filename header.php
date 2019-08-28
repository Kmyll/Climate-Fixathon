<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" href="img/favicon.ico" />
  <!-- CSS-->
  <link rel="stylesheet" href="css/climate.css">

  <!-- jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- D3.js -->
<script src="js/d3-legend.min.js" type="text/javascript"></script>
<script src="js/d3.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3-legend/2.13.0/d3-legend.js"></script>

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bitter|Coustard|Fredericka+the+Great|Gochi+Hand|Grand+Hotel|Itim|Merriweather|Nanum+Pen+Script|Nunito|Raleway|Scheherazade&display=swap" rel="stylesheet">

  <!-- AOS library -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- header-->
  <title>For a Better World</title>
</head>
<body>
  <header>



    <nav class="header-nav">
      <div class="toggle"><i class="fas fa-hamburger menu"></i></div>
      <ul>
        <li><a href="index.php"><i class="fas fa-igloo" style="color: white;"></i></a></li>
        <a class="map-header" href="index.php#world"><li class="map-header">Worldwide</li></a>
        <li><a href="governments.php">Governments</a></li>
        <li><a href="causes-and-risks.php">Causes</a></li>
        <li><a href="quiz.php">Quiz</a></li>
        <li><a href="help.php"><i class="far fa-question-circle" style="color: white;"></i></a></li>
      </ul>
    </nav>
  </header>



<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>


<!-- ICON NEEDS FONT AWESOME FOR CHEVRON UP ICON -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">






<script type="text/javascript">

$(document).ready(function(){
  $('.menu').click(function(){
    console.log("test");
    $('.header-nav ul').toggle({'height':'slow'});
  })
})


// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});


</script>


<style>
#return-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgba(0, 80, 161, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i {
    color: #fff;
    margin: 0;
    position: relative;
    left: 16px;
    top: 13px;
    font-size: 19px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top:hover {
    background: rgba(0, 80, 161, 1);
}
#return-to-top:hover i {
    color: #fff;
    top: 5px;
}



</style>