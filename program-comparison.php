<?php
require_once("util-db.php");
require_once("model-program-comparison.php");

$pageTitle = "Program Comparison";
include "view-header.php";

$programStatData = getProgramComparison();

$programs = [];
while ($row = $programStatData->fetch_assoc()) {
    $programs[] = $row;
}

include "view-program-comparison.php";
include "view-footer.php";
?>
