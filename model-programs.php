<?php
function selectPrograms() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT ProgramID, ProgramName, Duration, ProgramDescription, FROM project.program;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertProgram($programName, $duration, $diffLevel, $intensity, $daysPerWeek, $programDescription, $trainerID, $gymID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO project.program (ProgramName, Duration, DifficultyLevel, Intensity, DaysPerWeek, ProgramDescription, TrainerID, GymID) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("siiiisii", $programName, $duration, $diffLevel, $intensity, $daysPerWeek, $programDescription, $trainerID, $gymID);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateProgram($programName, $duration, $diffLevel, $intensity, $daysPerWeek, $programDescription, $trainerID, $gymID, $programid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE project.program set ProgramName = ?, Duration = ?, DifficultyLevel = ?, Intensity = ?, DaysPerWeek = ?, ProgramDescription = ?, TrainerID = ?, GymID = ? WHERE ProgramID = ?");
        $stmt->bind_param("siiiisiii", $programName, $duration, $diffLevel, $intensity, $daysPerWeek, $programDescription, $trainerID, $gymID, $programid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteProgram($programid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM project.program WHERE ProgramID = ?");
        $stmt->bind_param("i", $programid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
