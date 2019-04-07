<?php include "db.php"; ?>

<?php
function selectAllFromDb() {
    global $connection;
    $query = "SELECT * from user";
    
    $result = mysqli_query($connection,$query);
    if(!$result) {
        die('Query failed' . mysqli_error());
    }
    else {
    while($row = mysqli_fetch_assoc($result)) {
    ?>
    <pre>    
    <?php // <pre> is for pre-formatted text
        print_r($row);
    ?>
    </pre>
    <?php
     }
    }        
}

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

function createAccount() {
    if(isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = "INSERT INTO user(username,password) ";
    $query .= "VALUE ('$username','$password');";
    
    $result = mysqli_query($connection,$query);
    if(!$result) {
        die('Query failed' . mysqli_error());
    }
    else {
        echo "Account created. Succes = 100%";
    }
  }
}

function updateAccount() {
    if(isset($_POST['submit'])) {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
        
    $query = "UPDATE user SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id;";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("query failed" . mysqli_error($connection));
    }
    else {
        echo "Account updated. Succes = 100%";
    }
  }
}

function deleteAccount() {
    if(isset($_POST['submit'])) {
    global $connection;
    $id = $_POST['id'];
    
    $query = "DELETE FROM user ";
    $query .= "WHERE id = $id; ";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("query failed" . mysqli_error($connection));
    }
    else {
        echo "Account deleted. Succes = 100%";
    }
  }
}
?>
