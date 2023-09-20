<h1>Sports</h1>
<div class = "table-response">
  <table class = "table">
    <thread>
      <tr>
        <th>ID</th>
        <th>Sport</th>
        <th>Average Playtime</th>
      </tr>
    </thread>
  <tbody>
  <?php
while ($sport = $sports->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $athlete['sport_id']; ?></td>
    <td><?php echo $athlete['sport_name']; ?></td>
    <td><?php echo $athlete['average_playtime']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
