<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProgramModal<?php echo $program['ProgramID'];?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editProgramModal<?php echo $program['ProgramID'];?>" tabindex="-1" aria-labelledby="editProgramModalLabel<?php echo $program['ProgramID'];?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editProgramModalLabel<?php echo $program['ProgramID'];?>">Edit Program</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="programName<?php echo $program['ProgramID'];?>" class="form-label">Program Name</label>
            <input type="text" class="form-control" id="programName<?php echo $program['ProgramID'];?>" name="programName" value="<?php echo $program['ProgramName'];?>">
          </div>
          <div class="mb-3">
            <label for="duration<?php echo $program['ProgramID'];?>" class="form-label">Duration (in Weeks)</label>
            <input type="text" class="form-control" id="duration<?php echo $program['ProgramID'];?>" name="duration" value="<?php echo $program['Duration'];?>">
          </div>
          <div class="mb-3">
            <label for="diffLevel<?php echo $program['ProgramID'];?>" class="form-label">Difficulty Level (1-7)</label>
            <input type="text" class="form-control" id="diffLevel<?php echo $program['ProgramID'];?>" name="diffLevel" value="<?php echo $program['DifficultyLevel'];?>">
          </div>
          <div class="mb-3">
            <label for="intensity<?php echo $program['ProgramID'];?>" class="form-label">Intensity (1-7)</label>
            <input type="text" class="form-control" id="intensity<?php echo $program['ProgramID'];?>" name="intensity" value="<?php echo $program['Intensity'];?>">
          </div>
          <div class="mb-3">
            <label for="daysPerWeek<?php echo $program['ProgramID'];?>" class="form-label">Days Per Week</label>
            <input type="text" class="form-control" id="daysPerWeek<?php echo $program['ProgramID'];?>" name="daysPerWeek" value="<?php echo $program['DaysPerWeek'];?>">
          </div>
          <div class="mb-3">
            <label for="programDescription<?php echo $program['ProgramID'];?>" class="form-label">Program Description</label>
            <input type="text" class="form-control" id="programDescription<?php echo $program['ProgramID'];?>" name="programDescription" value="<?php echo $program['ProgramDescription'];?>">
          </div>
          <div class="mb-3">
            <label for="trainerID<?php echo $program['ProgramID'];?>" class="form-label">Trainer ID</label>
<?php
$trainerList = selectTrainersForInput();
$selectedTrainer = $program['TrainerID'];
include "view-trainer-input-list.php";
?>
          </div>
          <div class="mb-3">
            <label for="gymID<?php echo $program['ProgramID'];?>" class="form-label">Gym ID</label>
            <input type="text" class="form-control" id="gymID<?php echo $program['ProgramID'];?>" name="gymID" value="<?php echo $program['GymID'];?>">
          </div>
            <input type="hidden" name="programID" value="<?php echo $program['ProgramID'];?>">
            <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
