<?php include "db.php"; ?>
<?php include "sql_functions.php"; ?>

<?php updateAccount(); ?>

<?php include "includes/header.php"; ?>
   
<div class="container">
    <div class="col-sm-3">
       <h3 class="text-center"> Update account information </h3>
        <form action="login_update.php" method="post">
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

<?php include "includes/footer.php"; ?>

