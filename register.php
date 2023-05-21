<?php
require_once('templates/header.php');
require_once('./lib/tools.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
	
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username); 
    
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    $passwordb = stripslashes($_REQUEST['passwordb']);

    $defaultRole_id = 3;

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);

    if ($password != $passwordb ) {
        echo('<script>alert("les mots de passe doivent être identiques");</script>');
    } else {
        $userExist = ifUserExist($username);
        if ((int)$userExist != 0) {    
          echo('<script>alert("Le nom d\'utilisateur existe déjà");</script>');
        }else{      
            if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
              ?>
              <div class="text-center" >
                <div class="alert alert-danger" >
                  <ul class="list-unstyled">
                    <li> Doit être un minimum de 8 caractères</li>
                    <li>Doit contenir au moins 1 chiffre</li>
                    <li> Doit contenir au moins un caractère majuscule</li>
                    <li>Doit contenir au moins un caractère minuscule</li>
                  </ul>
                </div>
              </div>
              <?php
            }else{
            
            $sql = "INSERT into `users` (username, email, role_id, password)
            VALUES (:username, :email,  :defaultRole_id, '".hash('sha256', $password)."')"; 
            $query = $pdo->prepare($sql);
            $query->bindParam(':username', $username, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':defaultRole_id', $defaultRole_id, PDO::PARAM_INT);
            $query->execute();

            if($sql){
              echo "<div class='sucess'>
                    <h3>Vous êtes inscrit avec succès.</h3>
                    <p>Cliquez ici pour vous <a href='./login.php'>connecter</a></p>
              </div>";
            }
          }
        }
    }
}
?>
<form class="box" action="" method="post">
<a href="./index.php"> 
<img src="./assets/images/logoquaiAntique.png" alt="Logo Quai Antique" width="300">
</a>
  <h1 class="box-title">S'inscrire</h1>
	<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="password" class="box-input" name="passwordb" placeholder="Confirmez le mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="./login.php">Connectez-vous ici</a></p>
</form>
<?php 

require_once('templates/footer.php');
?>
</body>
</html>