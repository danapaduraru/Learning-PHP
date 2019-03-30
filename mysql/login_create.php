<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // CONNECT TO DATABASE
    $connection = mysqli_connect('localhost','root','','loginapp');
    if($connection) {
        echo "we are connected";
    }
    else {
        die("Database connection failed");
    }
    
    $query = "INSERT INTO user(username,password) ";
    $query .= "VALUE ('$username','$password');";
    
    $result = mysqli_query($connection,$query);
    if(!$result) {
        die('Query failed' . mysqli_error());
    }
}

?>