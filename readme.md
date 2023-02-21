Pour utiliser l'application en local:

Modifier les fichiers

lib/config.php
  define('DB_SERVER', 'Mon_localhost');
  define('DB_USERNAME', 'Usernam');
  define('DB_PASSWORD', 'Password');
  define('DB_NAME', 'Db_name');


lib/pdo.php et lib/tools.php
$pdo = new PDO('mysql:dbname=Db_name;host=Mon_localhost;charset=utf8mb4', 'Username', 'Password');

Importer la base de données "fiddy2051642" jointe en local

/--------------------------------------------------------------------------------------

Créer un compte Administrateur: 
Créer un compte via le bouton sign-in dans le header,
Se connecter avec le compte administrateur : id => admin, password => admin
Cliquer sur le bouton "administrer" qui est apparu,
renseigner l’identifiant dont le rôle doit être modifié, renseigner le rôle. 
(3 pour client - 2 pour Directeur - 1 pour administrateur)


/-------------------------------------------------------------------------------------

Pour vous connecter, vous pourrez utiliser les comptes 
admin / mdp admin comme administrateur
directeur / mdp directeur comme directeur
fiddy / mdp fiddy comme client