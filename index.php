
<?php 
    require 'header.php';
    session_start();
     
 ?>



	<section class="main-container">
		<div class="main-wrapper">
            <H2></H2>
			<h1></h1>
			<?php  

				if (isset($_SESSION['u_id'])) {
					echo "You are logged in!";
                }
             
			?>
            <?php
                if (isset($_SESSION['u_id'])) {
                    echo '<form action="includes/logout.inc.php" method="POST">
                        <button type="submit" name = "submit">Logout</button>
                        </form>';
} else {
                    echo 	'<br/></br></br>
                            <h1>SIGN IN</h1>
                            <BR/>
                            <BR/>
                            <BR/>
                            <form action="includes/login.inc.php" method="POST">
                            <h4>username/email: </h4><input type="text" name="uid" >
                            <br/>
                            <h4>password: </h4><input type="password" name="pwd" >
                            <button type="submit" name="submit">Login</button>
                            </form>
                            <br/>
                            <h8>dont have an account?  <a href="signup.php">create here</a></h8>
                            ';
                }
            
            
            ?>
		</div>
	</section>

<?php 
	require 'footer.php';
?>