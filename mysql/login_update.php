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
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                
                <div class="form-group">
                    <select name="id" id="">
                    <?php
                    showIdsFromDb();
                    ?>
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Update!">
            </form>
        </div>
    </div>
</body>

</html>
