<h1>Athletes with sports</h1>
<div class="card-group">

 <?php
while ($athlete = $athletes->fetch_assoc())  {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $athlete['athlete_name']; ?></h5>
      <p class="card-text">
  <?php
    $sports = selectSportByAthlete($athlete['athlete_id']);
  while ($sport = $sports->fetch_assoc())  {
    ?>
    <?php
  }
  ?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Age: <?php echo $athlete['athlete_age']; ?></small></p>
    </div>
  </div>
 
<?php
}
?>
</div>
