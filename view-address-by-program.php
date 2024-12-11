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
  }
  ?>
      </tbody>
    </table>
  </div>
  <?php
    // Iterate through the results to display gym details and the map
    if ($addressbyprogram->num_rows > 0) {
        while ($row = $addressbyprogram->fetch_assoc()) {
            $latitude = $row['Latitude'];
            $longitude = $row['Longitude'];
            echo "<div class='gym-details'>";
            echo "<h2>{$row['GymName']}</h2>";
            echo "<p>{$row['Address']}, {$row['City']}, {$row['State']} {$row['ZipCode']}</p>";
            
            // Include a map for this gym
            echo "<div id='map-{$row['GymID']}' style='width:100%;height:400px;'></div>";
            echo "<script>
                    function initMap() {
                        const location = { lat: $latitude, lng: $longitude };
                        const map = new google.maps.Map(document.getElementById('map-{$row['GymID']}'), {
                            zoom: 15,
                            center: location
                        });
                        new google.maps.Marker({
                            position: location,
                            map: map
                        });
                    }
                  </script>";
        }
    }
  ?>
</div>
