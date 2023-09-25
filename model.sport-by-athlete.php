<?php
function selectSportByAthlete($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT s.sport_id, sport_name, average_playtime, league_name, team, number_of_players FROM Sport s JOIN League l on l.sport_id = s.sport_id WHERE l.athlete_id = ?");
      $stmt->bind_param("i", $aid);  
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
