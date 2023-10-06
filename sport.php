<?php
require_once("util-db.php");
require_once("model.sport.php");

$pgaetitle = "Sports";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertSport($_POST['sName'], $_POST['sPlaytime'])) {
        echo '<div class="alert alert-success" role="alert">New Sport Added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateSport($_POST['sName'], $_POST['sPlaytime'], $_POST['sid')) {
        echo '<div class="alert alert-success" role="alert">Sport edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
     case "Delete":
      if (deleteSport($_POST['sid'])) {
        echo '<div class="alert alert-success" role="alert">Sport deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$sports = selectSport();
include "view-sport.php";
include "view-footer.php";
?>

