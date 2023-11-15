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
    /* Add some basic styling to the bars for better visibility */
    rect {
      fill: steelblue;
    }
  </style>
</head>
<body>

  <script>
    // Sample data for the bar chart
    const data = [30, 70, 150, 120, 200];

    // Set up the SVG container dimensions
    const svgWidth = 400;
    const svgHeight = 200;

    // Set up the scales for x and y axes
    const xScale = d3.scaleBand()
      .domain(d3.range(data.length))
      .range([0, svgWidth])
      .padding(0.1);

    const yScale = d3.scaleLinear()
      .domain([0, d3.max(data)])
      .range([svgHeight, 0]);

    // Create the SVG container
    const svg = d3.select('body').append('svg')
      .attr('width', svgWidth)
      .attr('height', svgHeight);

    // Create bars in the bar chart
    svg.selectAll('rect')
      .data(data)
      .enter().append('rect')
      .attr('x', (d, i) => xScale(i))
      .attr('y', d => yScale(d))
      .attr('width', xScale.bandwidth())
      .attr('height', d => svgHeight - yScale(d));

    // Add x-axis
    svg.append('g')
      .attr('transform', `translate(0,${svgHeight})`)
      .call(d3.axisBottom(xScale));

    // Add y-axis
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
  <!-- Include Highcharts library -->
  <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>

  <!-- Container for the chart -->
  <div id="chartContainer" style="height: 400px; width: 100%;"></div>

  <script>
    // Sample data for the column chart
    const chartData = [5, 10, 15, 7, 2];

    // Create the column chart
    Highcharts.chart('chartContainer', {
      chart: {
        type: 'column' // Set the chart type to column
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
    <!-- Load the Google Charts library -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Google Charts Bar Chart Example</title>
</head>
<body>

<!-- The container for the chart -->
<div id="bar-chart"></div>

<script>
    // Load the Google Charts library
    google.charts.load('current', {'packages': ['corechart']});

    // Set a callback to run when the Google Charts library is loaded
    google.charts.setOnLoadCallback(drawChart);

    // Callback function to draw the bar chart
    function drawChart() {
        // Sample data for the bar chart
        var data = google.visualization.arrayToDataTable([
            ['Category', 'Value'],
            ['Category A', 10],
            ['Category B', 20],
            ['Category C', 15]
        ]);

        // Configuration options for the chart
        var options = {
            title: 'Simple Bar Chart with Google Charts',
            hAxis: { title: 'Categories' },
            vAxis: { title: 'Values' }
        };

        // Create the bar chart
        var chart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
        chart.draw(data, options);
    }
</script>

</body>
</html>


