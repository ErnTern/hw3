<?php
require_once("util-db.php");
require_once("model.schedule.php");

$pgaetitle = "Schedule";
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
    case "Edit":
      if (updateSchedule($_POST['schID'], $_POST['schSDate'], $_POST['schEDate'], $_POST['schName'], $_POST['schIDD'])) {
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
$schedules = selectSchedule();
include "view-schedule.php";
include "view-footer.php";
?>
