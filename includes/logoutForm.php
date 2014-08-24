<h2>Logout</h2>

<?php if (!tep_session_is_registered('signed_in') == true){
    ?>
    <p>
        <h4>
            <?= 'Succesfully signed out, thank you for visiting.  <br> Would you <a href="login.php">like to</a>?';?>
        </h4>
    </p>
    <?php } ?>

	
	