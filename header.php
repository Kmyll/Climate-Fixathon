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
        <li><a href="index.php"><i class="fas fa-home home-icon" style="color: white;"></i></a></li>
        <a class="map-header" href="index.php#world"><li class="map-header">Worldwide</li></a>
        <li><a href="governments.php">Governments</a></li>
        <li><a href="causes-and-risks.php">Causes</a></li>
        <li><a href="quiz.php">Quiz</a></li>
      </ul>
    </nav>
  </header>










<script type="text/javascript">

$(document).ready(function(){
  $('.menu').click(function(){
    console.log("test");
    $('.header-nav ul').toggle({'height':'slow'});
  })
})

</script>
