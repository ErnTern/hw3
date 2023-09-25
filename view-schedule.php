<h1>Schedules</h1>
<div class = "table-response">
  <table class = "table">
    <thread>
      <tr>
        <th>Season/Tournament Name</th>
        <th>Sport ID</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th></th>
      </tr>
    </thread>
  <tbody>
  <?php
while ($schedule = $schedules->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $schedule['season_tourney']; ?></td>
    <td><?php echo $schedule['sport_id']; ?></td>
    <td><?php echo $schedule['start_date']; ?></td>
    <td><?php echo $schedule['end_date']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
