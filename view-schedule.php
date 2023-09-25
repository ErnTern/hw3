<h1>Schedules</h1>
<div class = "table-response">
  <table class = "table">
    <thread>
      <tr>
        <th>ID</th>
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
    <td><?php echo $schedule['schedule_id']; ?></td>
    <td><?php echo $schedule['start_date']; ?></td>
    <td><?php echo $schedule['end_date']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
