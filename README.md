# Projet4-OC

Procédure d'installation en local:

Avant de pouvoir accéder au site internet il vous faut installer wamp : https://www.wampserver.com/

Puis, vous devez récupérer le code source sur le github : https://github.com/HugoDeltour/Projet4-OC

Dans le dossier "www" du dossier "wamp" créez un dossier qui contiendra le site internet.

Accéder à wamp et créez un virtual host que vous nommez comme vous le voulez et le chemin d'accès sera comme suit : "C:/wamp/www/'nomDuDossier'/public"

Ensuite, il vous faut installer l'autoload de Composer comme suit:
  - Ouvrez un invité de commande
  - Dirigez vous vers le dossier contenant le fichier composer.json grâce à la commande "cd" :
      - Allez à la racine (généralement C:// ou D://) avec la commande "cd .."
      - Ensuite entrez la commande "cd" suivi du chemin d'accès au dossier choisi précédemment
  - Pour finir entrez la commande "composer dump-autoload"

Depuis localHost vous pouvez accéder à phpMyAdmin et ainsi créer la base de données "blog" et exécuter le script 'blog.sql' que vous trouverez dans le dossier sql du site internet.

Ensuite, il vous faudra modifier le fichier dev.php qui se situe dans le dossier config. Dedans vous devrez changer les constante HOST, DB_NAME, DB_USER et DB_password avec vos propres informations de base de données. Si vous êtes en local :
            const HOST = 'localHost';
            const DB_NAME = 'blog';
            const DB_user='root';
            const DB_password='';

Une fois cela fait il ne vous reste plus qu'à accéder au site internet en passant par votre localHost puis le virtuel host créé précédemment.

Pour vous connecter en temps qu'administrateur utilisez :

Pseudo :admin
Mot de passe: admin

Pour être un simple utilisateur utilisez :

Pseudo: user
Mot de passe: user
