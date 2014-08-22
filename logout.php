<?php require ("includes/connect.php"); ?>
<?php require ("includes/header.php"); ?>

<h2>Logout</h2>

<?php if ($_SESSION['signed_in'] == true):
    //unset all variables
    unset($_SESSION['signed_in']);
    unset($_SESSION['user_name']);
    ?>

    <p>
        <h4>
            <?= 'Succesfully signed out, thank you for visiting.'; ?>
        </h4>
    </p>

    <?php else: ?>
    <p>
        <h4>
            <?= 'You are not signed in. Would you <a href="login.php">like to</a>?';?>
        </h4>
    </p>
    <?php endif; ?>



<?php require "includes/footer.php"; ?>