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


<!-- Number 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D3.js Bar Chart Example</title>
  <script src="https://d3js.org/d3.v5.min.js"></script>
  <style>
    rect {
      fill: steelblue;
    }
  </style>
</head>
<body>

  <script>
    const data = [30, 70, 150, 120, 200];

    const svgWidth = 400;
    const svgHeight = 200;

    const xScale = d3.scaleBand()
      .domain(d3.range(data.length))
      .range([0, svgWidth])
      .padding(0.1);

    const yScale = d3.scaleLinear()
      .domain([0, d3.max(data)])
      .range([svgHeight, 0]);

    const svg = d3.select('body').append('svg')
      .attr('width', svgWidth)
      .attr('height', svgHeight);

    svg.selectAll('rect')
      .data(data)
      .enter().append('rect')
      .attr('x', (d, i) => xScale(i))
      .attr('y', d => yScale(d))
      .attr('width', xScale.bandwidth())
      .attr('height', d => svgHeight - yScale(d));

    svg.append('g')
      .attr('transform', `translate(0,${svgHeight})`)
      .call(d3.axisBottom(xScale));

    svg.append('g')
      .call(d3.axisLeft(yScale));
  </script>

</body>
</html>


<!-- Number 3 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Highcharts Example</title>
  <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
  <div id="chartContainer" style="height: 400px; width: 100%;"></div>

  <script>
    const chartData = [5, 10, 15, 7, 2];
    Highcharts.chart('chartContainer', {
      chart: {
        type: 'column' 
      },
      title: {
        text: 'Sample Column Chart'
      },
      xAxis: {
        categories: ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5']
      },
      yAxis: {
        title: {
          text: 'Values'
        }
      },
      series: [{
        name: 'Data Series',
        data: chartData
      }]
    });
  </script>

</body>
</html>


<!-- Number 4 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Google Charts Bar Chart Example</title>
</head>
<body>

<div id="bar-chart"></div>

<script>
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Category', 'Value'],
            ['Category A', 10],
            ['Category B', 20],
            ['Category C', 15]
        ]);

        var options = {
            title: 'Simple Bar Chart with Google Charts',
            hAxis: { title: 'Categories' },
            vAxis: { title: 'Values' }
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
        chart.draw(data, options);
    }
</script>

</body>
</html>


