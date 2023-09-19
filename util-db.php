<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('157.245.89.132', 'tranaaro_hw3user', 'HPl!&}bR4Z?7', 'tranaaro_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
