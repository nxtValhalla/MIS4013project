<?php
function selectAddressByProgram($programID) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.GymID, p.ProgramName, GymName, Address, City, State, ZipCode FROM project.program p join project.gym g on p.GymID = g.GymID WHERE p.ProgramID = ?");
        $stmt->bind_param("i", $programID);
        $stmt->execute();
        $result = $stmt->get_result();
        // // Debugging: Check if there are any errors
        // if (!$result) {
        //     echo "Query error: " . $stmt->error;
        // }
        
        // // Debugging: Print number of rows returned
        // if ($result->num_rows === 0) {
        //     echo "No results found for Location ID: " . $lid;
        // } else {
        //     echo "Results found: " . $result->num_rows;
        // }
        
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
