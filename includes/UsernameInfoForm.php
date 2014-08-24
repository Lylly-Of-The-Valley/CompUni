<?php $information = mysql_query("SELECT * FROM users where user_username ='".$_SESSION['username_s']."'");
$info= mysql_fetch_array($information, MYSQL_ASSOC);
?>

<form method="post" class="form-horizontal" action="register.php?">
    <fieldset>
        <legend>User Information</legend>
        <div class="form-group">
		 <p>
			<h4>
				<?= 'First name: '.htmlentities($info['users_firstname']);?>
			</h4>
		</p>
		<p>
			<h4>
				<?= 'Last name: '.htmlentities($info['users_lastname']);?>
			</h4>
		</p>
		<p>
			<h4>
				<?= 'Gender: '.htmlentities($info['users_gender']);?>
			</h4>
		</p>
		<p>
			<h4>
				<?= 'Town: '.htmlentities($info['user_town']);?>
			</h4>
		</p>
		<p>
		
			<h4>
				<?= 'User Name: '.htmlentities($info['user_username']);?>
			</h4>
		</p>
		<p>
			<h4>
				<?= 'Email: '.htmlentities($info['users_email_address']);?>
			</h4>
		</p>
		<p>
			<h4>
				<?= 'Description: '.htmlentities($info['user_description']);?>
			</h4>
		</p>

					
        </div>
       
    </fieldset>
</form>


