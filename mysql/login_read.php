<?php include "db.php"; ?>
<?php include "sql_functions.php"; ?>

<?php include "includes/header.php"; ?>
   
<div class="container">
    <div class="col-sm-3">
    <h3> Reading from DB </h3>
    <pre>
    <?php // <pre> is for pre-formatted text
        selectAllFromDb();
    ?>
    </pre>
    </div>
</div>

<?php include "includes/footer.php"; ?>

