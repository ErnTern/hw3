<h1>Athletes</h1>
<div class = "table-response">
  <table class = "table">
    <thread>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th></th>
      </tr>
    </thread>
  <tbody>
  <?php
while ($athlete = $athletes->fetch_assoc())  {
?>
  <tr>
    <td><?php echo $athlete['athlete_id']; ?></td>
    <td><?php echo $athlete['athlete_name']; ?></td>
    <td><?php echo $athlete['athlete_age']; ?></td>
    <td><a href="sport-by-athlete.php?id=<?php echo $athlete['athlete_id']; ?>">Sports</td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
