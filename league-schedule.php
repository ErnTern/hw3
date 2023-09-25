<?php
require_once("util-db.php");
require_once("model.schedule.php");

$pgaetitle = "Schedule";
include "view-header.php";
$schedules = selectSchedule();
include "view-schedule.php";
include "view-footer.php";
?>
