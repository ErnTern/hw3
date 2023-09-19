<h1>Athletes</h1>
<div class = "table-response">
<table class = "table">
<thread>
  <tr>
    <th>ID</th>
  <th>Name</th>
  <th>Age</th>
  </tr>
</thread>
<tbody>
  <?php
while ($athlete = $athlete->fetch_assoc())
  ?>
<tr>
  <td><?php echo $athlete['Athlete_ID']; ?></td>
  <td><?php echo $athlete['Athlete_Name']; ?></td>
  <td><?php echo $athlete['Athlete_Age']; ?></td>
</tr>
</tbody>
