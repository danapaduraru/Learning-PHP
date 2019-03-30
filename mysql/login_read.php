<?php
    
    // CONNECT TO DATABASE
    $connection = mysqli_connect('localhost','root','','loginapp');
    if($connection) {
        echo "we are connected";
    }
    else {
        die("Database connection failed");
    }
    
    $query = "SELECT * from user";
    
    $result = mysqli_query($connection,$query);
    if(!$result) {
        die('Query failed' . mysqli_error());
    }

?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login Form</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-3">

            <?php
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <pre>
                <?php
                print_r($row);
                ?>
                </pre>
                <?php
            }
            ?>

        </div>
    </div>
</body>

</html>
