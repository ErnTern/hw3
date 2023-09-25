<h1>Athletes with sports</h1>
<div class="card-group">

 <?php
while ($athlete = $athletes->fetch_assoc())  {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $athlete['athlete_name']; ?></h5>
      <p class="card-text">
       <ul class="list-group">
  <?php
    $sports = selectSportByAthlete($athlete['athlete_id']);
  while ($sport = $sports->fetch_assoc())  {
    ?>
     <li class="list-group-item"><?php echo $sport['sport_name']; ?> - <?php echo $sport['average_playtime']; ?> - <?php echo $sport['league_name']; ?> - <?php echo $sport['team']; ?> - <?php echo $sport['number_of_players']; ?></li>
        
    <?php
  }
  ?>
       </ul>
       </p>
      <p class="card-text"><small class="text-body-secondary">Age: <?php echo $athlete['athlete_age']; ?></small></p>
    </div>
  </div>
 
<?php
}
?>
</div>
