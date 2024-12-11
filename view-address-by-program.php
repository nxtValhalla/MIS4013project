<div class="hero">
  <h1>Gym Name and Address</h1>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
        <th>Gym ID</th>
        <th>Gym Name</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip Code</th>
        </tr>
      </thead>
      <tbody>
  <?php
  while ($address = $addressbyprogram->fetch_assoc()){
  ?>
    <tr>
      <td><?php echo $address['GymID']; ?></td>
      <td><?php echo $address['GymName']; ?></td>
      <td><?php echo $address['Address']; ?></td>
      <td><?php echo $address['City']; ?></td>
      <td><?php echo $address['State']; ?></td>
      <td><?php echo $address['ZipCode']; ?></td>
    </tr>
  <?php
    $latitude = $address['Latitude'];
    $longitude = $address['Longitude'];
    $gymID = $address['GymID'];
    $gymName = htmlspecialchars($address['GymName'], ENT_QUOTES);
  }
  ?>
      </tbody>
    </table>
  </div>
  <div id="map-<?php echo $gymID; ?>" style="width:100%;height:400px;"></div>
</div>
 <!-- Dynamically generate maps for each gym -->
  <?php
    echo "<div class='gym-details'>";
    echo "<h2>{$gymName}</h2>";
    echo "<p>{$addressbyprogram['Address']}, {$addressbyprogram['City']}, {$addressbyprogram['State']} {$addressbyprogram['ZipCode']}</p>";
    echo "<div id='map-{$gymID}' style='width:100%;height:400px;'></div>";
    echo "<script>
            addMap('map-{$gymID}', $latitude, $longitude, '$gymName');
          </script>";
    echo "</div>";
  ?>
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
