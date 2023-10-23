<?php
require_once("util-db.php");
require_once("model.schedule.php");

$pgaetitle = "Schedules";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertSchedule($_POST['schName'], $_POST['schID'], $_POST['schSDate'], $_POST['schEDate'])) {
        echo "<p>success</p>";
      } else {
        echo "<p>error</p>";
      }
    break;
  }
}
     
    
    
    /*
    if (insertSchedule($_POST['schName'], $_POST['schID'])) {
        echo '<div class="alert alert-success" role="alert">New Season/Tourney Added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateSchedule($_POST['schName'], $_POST['schID'], $_POST['schIDD'])) {
        echo '<div class="alert alert-success" role="alert">Season/Tourney edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
     case "Delete":
      if (deleteSchedule($_POST['schIDD'])) {
        echo '<div class="alert alert-success" role="alert">Season/Tourney deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}
*/
$schedule = selectSchedule();
include "view-schedule.php";
include "view-footer.php";
?>
