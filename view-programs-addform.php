<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProgramModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newProgramModal" tabindex="-1" aria-labelledby="newProgramModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newProgramModalLabel">Add a Program</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="programName" class="form-label">Program Name</label>
            <input type="text" class="form-control" id="programName" name="programName">
          </div>
          <div class="mb-3">
            <label for="duration" class="form-label">Duration (in Weeks)</label>
            <input type="text" class="form-control" id="duration" name="duration">
          </div>
          <div class="mb-3">
            <label for="diffLevel" class="form-label">Difficulty Level (1-7)</label>
            <input type="text" class="form-control" id="diffLevel" name="diffLevel">
          </div>
          <div class="mb-3">
            <label for="intensity" class="form-label">Intensity (1-7)</label>
            <input type="text" class="form-control" id="intensity" name="intensity">
          </div>
          <div class="mb-3">
            <label for="daysPerWeek" class="form-label">Days Per Week</label>
            <input type="text" class="form-control" id="daysPerWeek" name="daysPerWeek">
          </div>
          <div class="mb-3">
            <label for="programDescription" class="form-label">Program Description</label>
            <input type="text" class="form-control" id="programDescription" name="programDescription">
          </div>
          <div class="mb-3">
            <label for="trainerID" class="form-label">Trainer ID</label>
            <input type="text" class="form-control" id="trainerID" name="trainerID">
          </div>
          <div class="mb-3">
            <label for="gymID" class="form-label">Gym ID</label>
            <input type="text" class="form-control" id="gymID" name="gymID">
          </div>
            <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>
