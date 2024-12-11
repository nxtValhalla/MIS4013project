<select class="form-select" id="trainerID" name="trainerID">
<?php
while ($trainerItem = $trainerList -> fetch_assoc()) {
  $selText = "";
  if ($selectedTrainer == $trainerItem['TrainerID']) {
    $selText = " selected";
  }
?>
  <option value="<?php echo $trainerItem['TrainerID']; ?>"<?$selText?>><?php echo $trainerItem['TrainerName']; ?></option>
<?php
}
?>
</select>
