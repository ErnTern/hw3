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
<!-- Use an ID for the canvas element -->
<canvas id="myCanvas"></canvas>

<script>
  // Create an instance of Zdog Illustration
  let illo = new Zdog.Illustration({
    element: 'myCanvas', // Use the canvas element ID 'myCanvas'
    zoom: 2, // Zoom in to see the model better
  });

  // Create a shape (cuboid in this case) using Zdog
  let box = new Zdog.Box({
    addTo: illo, // Add the box to the illustration
    width: 80,
    height: 80,
    depth: 80,
    stroke: 20, // Border thickness
    color: '#E62', // Box color
  });

  // Update and render the illustration
  function animate() {
    illo.updateRenderGraph();
    requestAnimationFrame(animate);
  }

  animate(); // Start the animation loop
</script>
