<?php 
	include_once 'header.php';
 ?>



	<section class="main-container">
		<div class="main-wrapper">
            <br/><br/><br/>
			<h1>Signup</h1>
			<form class="signup-form" action="includes/signup.inc.php" method="POST">
				<input type="text" name="first" placeholder="Firstname">
				<input type="text" name="last" placeholder="Lastname">
				<input type="text" name="email" placeholder="E-mail">
				<input type="text" name="uid" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password">
                <br/>
				<button type="submit" name="submit">Sign up</button>
                <br/><br/>
                <h8>already has an account?<a href="index.php">sign in here</a></h8>
			</form>
		</div>
	</section>

<?php 
	include_once 'footer.php';
?>