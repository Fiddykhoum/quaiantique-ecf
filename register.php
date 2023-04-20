
<?php
require_once('templates/header.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){

// demarrer ici la condition de verif si le username existe
// $usernameTest = $_POST['username'];  //fid
// $usernameTest = $_REQUEST['username'];
// $stmt = $pdo->prepare("SELECT * FROM users WHERE username=?");
// $stmt->execute([$usernameTest]); 
// $user = $stmt->fetch();
// if ($user) {

//  } else {

	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username); 
	
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);

	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
  $defaultRole_id = 3;
	
	$query = "INSERT into `users` (username, email, role_id, password)
				VALUES ('$username', '$email',  $defaultRole_id, '".hash('sha256', $password)."')";
	$res = mysqli_query($conn, $query);
  //  }
  // fin du code si username existe

    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='./login.php'>connecter</a></p>
			 </div>";
    }
}else{
?>
<form class="box" action="" method="post">
<a href="./index.php"> 
<img src="./assets/images/logoquaiAntique.png" alt="Logo Quai Antique" width="300">
</a>              
    <h1 class="box-title">S'inscrire</h1>
	<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="./login.php">Connectez-vous ici</a></p>
</form>
<?php } 

require_once('templates/footer.php');
?>
</body>
</html>