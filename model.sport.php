<?php
function selectSport() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT sport_id, sport_name, average_playtime FROM `Sport`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertSport($sName, $sPlaytime) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Sport` (`sport_name`, `average_playtime`) VALUES (?, ?)");
        $stmt->bind_param("ss", $sName, $sPlaytime);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateSport($sName, $sPlaytime, $sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `Sport` set `sport_name` = ?, `average_playtime` = ? where sport_id = ?");
        $stmt->bind_param("ssi", $sName, $sPlaytime, $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteSport($sid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Sport where sport_id = ?");
        $stmt->bind_param("i", $sid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
