<?php
require_once("util-db.php");
require_once("model-address-by-program.php");

$pageTitle = "Gym Address by Program";
include "view-header.php";
?>

    <link rel="stylesheet" href="background-image.css">
    <link rel="stylesheet" href="page-heading.css">
    <link rel="stylesheet" href="content-box.css">
    <link rel="stylesheet" href="sticky-header.css">
    <h1 class="page-header">Gym Address For <?php echo $program['ProgramName']?></h1>

<?php
$addressbyprogram = selectAddressByProgram($_POST['programID']);
include "view-address-by-program.php";
include "view-footer.php";
?>
