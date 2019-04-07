<?php include "db.php"; ?>
<?php include "sql_functions.php"; ?>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login Form</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-3">
        <h3> Reading from DB </h3>
        <?php   
            selectAllFromDb();
        ?>
        </div>
    </div>
</body>

</html>
