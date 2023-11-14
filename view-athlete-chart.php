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
  const ctx3 = document.getElementById('myChart3');

  new Chart(ctx3, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        axis: 'y',
        label: 'Number of Things',
        data: [22, 10, 8, 3, 0, 15],
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

<!-- Chart 3 -->
<div>
  <canvas id="myChart2"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx2 = document.getElementById('myChart2');
   new Chart(ctx2, {
  type: 'bubble',
  data: {
  options: {}
    const data = {
  datasets: [{
    label: 'First Dataset',
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
};
</script>

