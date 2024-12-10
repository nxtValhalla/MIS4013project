<h1>Programs by Trainer</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Trainer ID</th>
      <th>Trainer Name</th>
      <th>Specialization</th>
      <th>Program Name</th>
      <th>Program Description</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($pbt = $programsbytrainer->fetch_assoc()){
?>
  <tr>
    <td><?php echo $pbt['TrainerID']; ?></td>
    <td><?php echo $pbt['TrainerName']; ?></td>
    <td><?php echo $pbt['Specialization']; ?></td>
    <td><?php echo $pbt['ProgramName']; ?></td>
    <td><?php echo $pbt['ProgramDescription']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
