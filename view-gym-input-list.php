<select class="form-select" id="gymID" name="gymID">
<?php
while ($gymItem = $gymList -> fetch_assoc()) {
  $selText = "";
  if ($selectedGym == $gymItem['GymID']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $gymItem['GymID']; ?>"<?$selText?>><?php echo $gymItem['GymName']; ?></option>
<?php
}
?>
</select>
