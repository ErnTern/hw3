<h1>Athlete Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
  while ($athlete = $athletes->fetch_assoc())  { 
  echo $athlete['num_league'] . ", ";
}
?>
              ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$athlete = selectAthlete();
  while ($athlete = $athletes->fetch_assoc())  { 
  echo "'" . $athlete['athlete_name'] . "', ";
}
?>
    ]
},
  });
</script>


<!-- Chart 2 -->
<div>
  <canvas id="myChart1"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx1 = document.getElementById('myChart1');

  new Chart(ctx1, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: 'Number of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>


<!-- Chart 2.5 -->
<div>
  <canvas id="myChart3"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const ctx3 = document.getElementById('myChart3').getContext('2d');

    const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
    const data = {
      labels: labels,
      datasets: [{
        label: 'Line Chart',
        data: [65, 59, 80, 81, 56, 55, 40],
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
      }]
    };

    new Chart(ctx3, {
      type: 'line',
      data: data,
      options: {} // You need to close the data object before the options object
    });
  });
</script>

<!-- Chart 3 -->
<div>
  <canvas id="myChart2"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const ctx2 = document.getElementById('myChart2').getContext('2d');
    new Chart(ctx2, {
      type: 'bubble',
      data: {
        datasets: [{
          label: 'Bubble Chart',
          data: [{
            x: 20,
            y: 30,
            r: 15
          }, {
            x: 40,
            y: 10,
            r: 10
          }],
        }]
      },
      options: {} // You need to close the data object before the options object
    });
  });
</script>

<!-- Chart 2 -->
<!DOCTYPE html>
<html>
  <head>
    <title>My first Chartist Tests</title>
    <link rel="stylesheet"
          href="bower_components/chartist/dist/chartist.min.css">
  </head>
  <body>
    <!-- Site content goes here !-->
    <script src="bower_components/chartist/dist/chartist.min.js"></script>
  </body>
</html>
<div class="ct-chart ct-perfect-fourth"></div>
var data = {
  // A labels array that can contain any sort of values
  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
  // Our series array that contains series objects or in this case series data arrays
  series: [
    [5, 2, 4, 2, 0]
  ]
};

// Create a new line chart object where as first parameter we pass in a selector
// that is resolving to our chart container element. The Second parameter
// is the actual data object.
new Chartist.Line('.ct-chart', data);

