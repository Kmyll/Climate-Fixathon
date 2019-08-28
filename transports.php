<?php include "header.php" ?>

<div class="container" id="top">
  <h1>Transports</h1>

  <h2><i class="fas fa-shoe-prints"></i> Carbon footprint per transport</h2>
  <p>
    Before finding any transportation and commute solution, we need compare the CO2 emissions of the transport methods for the same travel. For that, I'm going to use an <a href="https://consommerresponsable.com/empreinte-carbone-mode-de-transport-plus-polluant/" target="_blank">example</a> from Paris to Lyon in France (one way, 466 km).</p><br>

    <ul>
      <li><b>By plane:</b> 96.6 kg of CO2 emissions </li>
      <li><b>By car:</b> 79.49 kg of CO2 emissions</li>
      <li><b>By bus:</b> 27.26 kg of CO2 emissions</li>
      <li><b>By train:</b> 1.49 kg of CO2 emissions</li>
    </ul>
    <br>
    <p>I used a huge variety of calculators from Google to find out the emissions are all different, yet similar.</p>
<br><br>
    <div id="chartdiv"></div>
    <br><br>
  <h2><i class="fas fa-bicycle"></i>Alternatives</h2>

<p>The graphic below shows that, for the same distance travelled, the carbon emissions are completely different for each transport method. Therefore :</p><br>

<img class="train-station" src="img/transports/charles-forerunner-gapYVvUg1M8-unsplash.jpg" alt="train station">

<ul>
  <li>Avoid flying if you have a chance to travel by car, bus or (even better) train</li>
  <li>Privilege public transport to go to work if possible</li>
  <li>Work from home at least one day in the week if you can</li>
  <li>Try to carpool to work or to go on vacation</li>
  <li>Participate to a public transport project in your city/county</li>
  <li>Reduce your products importation if you can find a similar product near you (and shop locally whenever possible).</li>
  <li>If possible, walk or bike for short distances instead of taking your car (2-3km is perfectly doable walking distance and is good for your health)</li>
  <li>If you want to change your car, switch to a hybrid/electric vehicle</li>
  <li>Improve your driving style by avoiding speeding and suddent braking</li>
  <li>Check your tires inflation</li>
  <li>Take fewer but longer vacation far away</li>
  <li>Fly in economy class: There's more people in economy class so the CO2 emission is shared by more travelers</li>
</ul>

</div>
<?php include "footer.php" ?>


    <style>
    #chartdiv {
      width: 100%;
      height: 250px;
    }
  </style>

  <!-- Resources -->
  <script src="https://www.amcharts.com/lib/4/core.js"></script>
  <script src="https://www.amcharts.com/lib/4/charts.js"></script>
  <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

  <!-- Chart code -->
  <script>
  am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    // Create chart instance
    var chart = am4core.create("chartdiv", am4charts.XYChart);

    // Add data
    chart.data = [{
      "name": "Plane",
      "points": 96.,
      "color": chart.colors.next(),
      "bullet": "img/transports/icons8-paper-plane-100.png"
    }, {
      "name": "Car",
      "points": 79.49,
      "color": chart.colors.next(),
      "bullet": "img/transports/icons8-car-100.png"
    }, {
      "name": "Bus",
      "points": 27.26,
      "color": chart.colors.next(),
      "bullet": "img/transports/icons8-bus-100 (1).png"
    }, {
      "name": "Train",
      "points": 1.5,
      "color": chart.colors.next(),
      "bullet": "img/transports/icons8-bus-100.png"
    }];

    // Create axes
    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
    categoryAxis.dataFields.category = "name";
    categoryAxis.renderer.grid.template.disabled = true;
    categoryAxis.renderer.minGridDistance = 30;
    categoryAxis.renderer.inside = true;
    categoryAxis.renderer.labels.template.fill = am4core.color("#111");
    categoryAxis.renderer.labels.template.fontSize = 20;

    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
    valueAxis.renderer.grid.template.strokeDasharray = "4,4";
    valueAxis.renderer.labels.template.disabled = true;
    valueAxis.min = 0;

    // Do not crop bullets
    chart.maskBullets = false;

    // Remove padding
    chart.paddingBottom = 0;

    // Create series
    var series = chart.series.push(new am4charts.ColumnSeries());
    series.dataFields.valueY = "points";
    series.dataFields.categoryX = "name";
    series.columns.template.propertyFields.fill = "color";
    series.columns.template.propertyFields.stroke = "color";
    series.columns.template.column.cornerRadiusTopLeft = 15;
    series.columns.template.column.cornerRadiusTopRight = 15;
    series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/b]";

    // Add bullets
    var bullet = series.bullets.push(new am4charts.Bullet());
    var image = bullet.createChild(am4core.Image);
    image.horizontalCenter = "middle";
    image.verticalCenter = "bottom";
    image.dy = 20;
    image.y = am4core.percent(100);
    image.propertyFields.href = "bullet";
    image.tooltipText = series.columns.template.tooltipText;
    image.propertyFields.fill = "color";
    image.filters.push(new am4core.DropShadowFilter());

  }); // end am4core.ready()
</script>


