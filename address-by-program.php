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
    <link rel="stylesheet" href="gym-map.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <h1 class="page-header">Gym Address</h1>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
  function addMap(containerId, latitude, longitude, gymName) {
    // Initialize Leaflet map
    const map = L.map(containerId).setView([latitude, longitude], 15);

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors',
    }).addTo(map);

    // Add a marker to the map
    L.marker([latitude, longitude])
      .addTo(map)
      .bindPopup(gymName)
      .openPopup();
  }
</script>

<?php
$addressbyprogram = selectAddressByProgram($_POST['programID']);
include "view-address-by-program.php";
include "view-footer.php";
?>
