<?php
require_once("util-db.php");
require_once("model-programs-by-trainer.php");

$pageTitle = "Programs by Trainer";
include "view-header.php";
$programsbytrainer = selectProgramsByTrainer($_GET['trainerid']);
include "view-programs-by-trainer.php";
include "view-footer.php";
?>
