<?php
function selectAthlete() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Athlete_ID, Athlete_Name, Athlete_Age FROM `Athlete`");
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
