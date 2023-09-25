<h1>League by Sport</h1>
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
while ($league = $leagues->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $league['sport_id']; ?></td>
    <td><?php echo $league['sport_name']; ?></td>
    <td><?php echo $league['average_playtime']; ?></td>
    <td><?php echo $league['league_name']; ?></td>
    <td><?php echo $league['team']; ?></td>
    <td><?php echo $league['number_of_players']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
