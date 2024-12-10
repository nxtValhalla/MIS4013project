<?php
require_once("util-db.php");
require_once("model-trainers.php");

$pageTitle = "Meet Our Trainers";
include "view-header.php";
?>
    <link rel="stylesheet" href="background-image.css">
    <link rel="stylesheet" href="page-heading.css">
    <link rel="stylesheet" href="content-box.css">
    <link rel="stylesheet" href="sticky-header.css">
    <link rel="stylesheet" href="modal-label.css">
    <h1 class="page-header">Our Trainers</h1>
<?php
if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertTrainer($_POST['trainerName'], $_POST['spec'], $_POST['email'], $_POST['phone'])) {
        echo '<div class="alert alert-success" role="alert">Trainer Added Successfully!</div>';   
      } else {
        echo '<div class="alert alert-danger" role="alert">Error. No Trainer Added.</div>';
      }
      break;
    case "Edit":
      if (updateTrainer($_POST['trainerName'], $_POST['spec'], $_POST['email'], $_POST['phone'], $_POST['trainerid'])) {
        echo '<div class="alert alert-success" role="alert">Trainer Edited Successfully!</div>';   
      } else {
        echo '<div class="alert alert-danger" role="alert">Error. No Trainer Edited.</div>';
      }
      break;
    case "Delete":
      if (deleteTrainer($_POST['trainerid'])) {
        echo '<div class="alert alert-success" role="alert">Trainer Deleted Successfully!</div>';   
      } else {
        echo '<div class="alert alert-danger" role="alert">Error. No Trainer Removed.</div>';
      }
      break;
  }
}

$trainers = selectTrainers();
include "js-format-phone.php";
include "view-trainers.php";
include "view-footer.php";
?>
