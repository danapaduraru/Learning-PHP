<?php include "db.php"; ?>
<?php include "sql_functions.php"; ?>

<?php deleteAccount(); ?>

<?php include "includes/header.php"; ?>

<div class="container">
    <div class="col-sm-3">
       <h3> Delete account </h3>
        <form action="login_delete.php" method="post">
            <div class="form-group">
               <h5> Choose account id</h5>
                <select name="id" id="">
                <?php
                showIdsFromDb();
                ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Delete!">
        </form>
    </div>
</div>

<?php include "includes/footer.php"; ?>
