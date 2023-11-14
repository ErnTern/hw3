<?php
function selectAthlete() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT athlete_name, COUNT(l.league_id) as num_league from Athlete a JOIN League l ON l.athlete_id=a.athlete_id GROUP BY athlete_name");
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
