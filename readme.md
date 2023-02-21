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
