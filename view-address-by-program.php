<h1 class="page-header">Gym Address For <?php echo $addressbyprogram['ProgramName']; ?></h1>
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
</div>
