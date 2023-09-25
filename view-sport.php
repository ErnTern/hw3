<h1>Sports</h1>
<div class = "table-response">
  <table class = "table">
    <thread>
      <tr>
        <th>ID</th>
        <th>Sport</th>
        <th>Average Playtime</th>
        <th></th>
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
    <td>
      <form method = "post" action = "league-by-sport.php">
        <input type = "hidden" name="lid" value ="<?php echo $sport['sport_id']; ?>">
        <button type="submit" class="btn btn-primary">Leagues</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>

