<h1>Sports played by Athletes</h1>
<div class = "table-response">
  <table class = "table">
    <thread>
      <tr>
        <th>ID</th>
        <th>Sport</th>
        <th>Average Playtime</th>
        <th>League Name</th>
        <th>Team</th>
        <th>Number of Players</th>
      </tr>
    </thread>
  <tbody>
  <?php
while ($sport = $sports->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $sport['sport_id']; ?></td>
    <td><?php echo $sport['sport_name']; ?></td>
    <td><?php echo $sport['average_playtime']; ?></td>
    <td><?php echo $sport['league_name']; ?></td>
    <td><?php echo $sport['team']; ?></td>
    <td><?php echo $sport['number_of_players']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
