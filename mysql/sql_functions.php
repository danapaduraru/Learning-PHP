<?php include "db.php"; ?>

<?php

function showIdsFromDb() {
    global $connection;
    $query = "SELECT * from user";
    $result = mysqli_query($connection,$query);
    if(!$result) {
        die('Query failed' . mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        
        echo "<option value='$id'>$id</option>"; 
        // single quotes inside
    }
}

?>