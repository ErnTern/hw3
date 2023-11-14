<h1>Athlete Chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart').getContext('2d');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
        data: [
          <?php
            $athletes = selectAthlete();
            while ($athlete = $athletes->fetch_assoc()) { 
              echo $athlete['num_league'] . ", ";
            }
          ?>
        ],
        // Add labels for each data point in the dataset
        labels: [
          <?php
            $athletes = selectAthlete();
            while ($athlete = $athletes->fetch_assoc()) { 
              echo "'" . $athlete['athlete_name'] . "', ";
            }
          ?>
        ]
      }]
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
        label: 'My First Dataset',
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
      },
      options: {} // You need to close the data object before the options object
    });
  });
</script>

