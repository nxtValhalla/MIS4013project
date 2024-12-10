<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProgramModal<?php echo $program['ProgramID'];?>">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
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
            <input type="text" class="form-control" id="programName<?php echo $program['ProgramID'];?>" name="programName" value="<?php echo $trainer['ProgramName'];?>">
          </div>
          <div class="mb-3">
            <label for="duration<?php echo $program['ProgramID'];?>" class="form-label">Duration (in Weeks)</label>
            <input type="text" class="form-control" id="duration<?php echo $program['ProgramID'];?>" name="duration" value="<?php echo $trainer['Duration'];?>">
          </div>
          <div class="mb-3">
            <label for="diffLevel<?php echo $program['ProgramID'];?>" class="form-label">Difficulty Level (1-7)</label>
            <input type="text" class="form-control" id="diffLevel<?php echo $program['ProgramID'];?>" name="diffLevel" value="<?php echo $trainer['DifficultyLevel'];?>">
          </div>
          <div class="mb-3">
            <label for="intensity<?php echo $program['ProgramID'];?>" class="form-label">Intensity (1-7)</label>
            <input type="text" class="form-control" id="intensity<?php echo $program['ProgramID'];?>" name="intensity" value="<?php echo $trainer['Intensity'];?>">
          </div>
          <div class="mb-3">
            <label for="daysPerWeek<?php echo $program['ProgramID'];?>" class="form-label">Days Per Week</label>
            <input type="text" class="form-control" id="daysPerWeek<?php echo $program['ProgramID'];?>" name="daysPerWeek" value="<?php echo $trainer['DaysPerWeek'];?>">
          </div>
          <div class="mb-3">
            <label for="programDescription<?php echo $program['ProgramID'];?>" class="form-label">Program Description</label>
            <input type="text" class="form-control" id="programDescription<?php echo $program['ProgramID'];?>" name="programDescription" value="<?php echo $trainer['ProgramDescription'];?>">
          </div>
          <div class="mb-3">
            <label for="trainerID<?php echo $program['ProgramID'];?>" class="form-label">Trainer ID</label>
            <input type="text" class="form-control" id="trainerID<?php echo $program['ProgramID'];?>" name="trainerID" value="<?php echo $trainer['TrainerID'];?>">
          </div>
          <div class="mb-3">
            <label for="gymID<?php echo $program['ProgramID'];?>" class="form-label">Gym ID</label>
            <input type="text" class="form-control" id="gymID<?php echo $program['ProgramID'];?>" name="gymID" value="<?php echo $trainer['GymID'];?>">
          </div>
            <input type="hidden" name="programID" value="<?php echo $program['ProgramID'];?>">
            <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
