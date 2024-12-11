<div class="hero">
  <h1>Gym Name and Address</h1>
  <div class="table-responsive" style="width: 80%;">
    <table class="table" style="width: 100%;">
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
    $latitude = $address['Latitude'];
    $longitude = $address['Longitude'];
    $gymID = $address['GymID'];
    $gymName = htmlspecialchars($address['GymName'], ENT_QUOTES);
    $addressText = $address['Address'] . ", " . $address['City'] . ", " . $address['State'] . " " . $address['ZipCode'];
  ?>
    <tr>
      <td><?php echo $address['GymID']; ?></td>
      <td><?php echo $address['GymName']; ?></td>
      <td><?php echo $address['Address']; ?></td>
      <td><?php echo $address['City']; ?></td>
      <td><?php echo $address['State']; ?></td>
      <td><?php echo $address['ZipCode']; ?></td>
    </tr>
    <tr>
      <td colspan="6">
        <div id="map-<?php echo $gymID; ?>" style="width:100%;height:600px;"></div>
        <script>
          addMap('map-<?php echo $gymID; ?>', <?php echo $latitude; ?>, <?php echo $longitude; ?>, '<?php echo $gymName; ?>');
        </script>
      </td>
    </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

