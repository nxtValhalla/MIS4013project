<?php 
function getProgramComparison() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT ProgramName, DaysPerWeek, DifficultyLevel, IntensityFROM project.program ORDER BY ProgramName;");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
