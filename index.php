<?php include "header.php" ?>

<section class="header-img">
  <div class="presentation">
    <h1>For a better world</h1>
    <h2>Reverse climate breakdown</h2>
    <a href="#bubble-pres"><h3 ><i class=" chevron fas fa-chevron-down"></i></h3></a>
  </div>
</section>

<section class="bubble-presentation" id="bubble-pres">

  <h2>Global breakdown actors</h2>
  <div class="line"></div>
  <ul>
    <li class="causes">  <a href="causes-and-risks.php"><img src="img/index-icons/causes.png" alt="roads"> <span>Causes and risks</span></a></li>
    <li class="governments"> <a href="governments.php"> <img src="img/index-icons/government.png" alt="monument"> <span>Governments</span></a></li>
    <li class="companies"> <a href="companies.php"> <img src="img/index-icons/companies.png" alt="buildings"> <span>Companies</span></a></li>
  </ul>
  <ul>
    <li class="food"> <a href="food.php"> <img src="img/index-icons/food.png" alt="food"> <span>Food</span></a></li>
    <li class="lifestyle"> <a href="lifestyle.php"> <img src="img/index-icons/lifestyle.png" alt="run sunset"> <span>Lifestyle</span></a></li>
    <li class="transports"> <a href="transports.php"> <img src="img/index-icons/transports.png" alt="subway"> <span>Transports</span></a></li>
  </ul>


</section>

<section class="map">

  <h2>Worldwide Carbon footprint for 2018</h2>
  <div class="line2"></div>
  <section class="map-legend">
    <h4><i class="fas fa-screwdriver"></i> Legend</h4>
    <p>(Please move your mouse over each country to see the carbon emission rate. <br>
      The data are from this <a target="_blank"  href="http://www.globalcarbonatlas.org/">website</a>. You can also dowload the percentage per countries <a href="global-carbon-emissions.pdf" download>here </a>).
    </p>



      <div class="legend1 flex-legend">
        <div class="rectangle1"></div>
        <b>Countries whom carbon emissions are the highest</b>
      </div>
      <div class="legend2 flex-legend">
        <div class="rectangle2"></div>
        Countries whom carbon emissions are high
      </div>

      <div class="legend3 flex-legend">
        <div class="rectangle3"></div>
        Countries whom carbon emissions are moderate
      </div>

      <div class="legend4 flex-legend">
        <div class="rectangle4"></div>
        Data not available for 2018
      </div>


    </section>

    <?php include "map.php" ?>
    <div class="" id="world">

    </div>
  </section>

  <?php include "footer.php" ?>
