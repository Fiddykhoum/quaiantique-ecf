<?php
require_once('templates/header.php');
//include in the header
//require('./lib/config.php');

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$_SESSION['username'] = $username;
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query);  
  // or die(mysql_error()
	
	if (mysqli_num_rows($result) == 1) {
		$user = mysqli_fetch_assoc($result);
		// vérifier si l'utilisateur est admin ou user
		if ($user['type'] == 'admin') {
			header('location: ajout_contenu.php');		  
		}else{
			header('location: index.php');
		}
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>
  <form class="box" action="" method="post" name="login">
  <a href="./index.php"> 
    <img src="assets/images/logoquaiAntique.png" alt="Logo Quai Antique" width="300"> 
</a>  
    <h1 class="box-title">Connexion</h1>
    <label>Identifiant</label>
    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
    <label>Mot de passe</label>
    <input type="password" class="box-input" name="password" placeholder="Mot de passe">
    <input type="submit" value="Connexion " name="submit" class="box-button">
    <p class="box-register">Vous êtes nouveau ici?  &#8702<a href="register.php">S'inscrire</a></p>

    <?php if (!empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>

  </form>

  <?php
    require_once('templates/footer.php');
    ?>
</body> 
</html>