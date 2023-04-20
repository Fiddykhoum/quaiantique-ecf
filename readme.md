Pour utiliser l'application en local:

Modifier la fonction host() dans le fichier lib/config.php

  function host() {
  $hostChange = [
      'host' => 'my_host',
      'username' => 'my_username',
      'password' => 'my_pasword',
      'dbName' => 'my_database_name',
    ];   
  return $hostChange;
}

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


config.php
pdo.php 
tools.php

array(10) { 
    ["id"]=> int(2) [0]=> int(2) 
    ["name"]=> string(13) "Farid Khoumri" 
    [1]=> string(13) "Farid Khoumri" 
    ["nbPersonnes"]=> string(1) "2" 
    [2]=> string(1) "2" 
    ["quand"]=> string(10) "2023-03-18"
    [3]=> string(10) "2023-03-18" 
    ["heure"]=> string(8) "11:30:00" 
    [4]=> string(8) "11:30:00" 
}
