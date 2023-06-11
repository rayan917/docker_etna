## Groupe de mamach_r 865411

# TIC-SYS2

_Projet d'hébergement web réalisé par Mamache Rayan et Achemaoui Amine.

## Usage

Afin de démarrer le projet, exécutez les commandes suivantes:

``docker-compose up --build`
Cela va construire les images ainsi que les containers pour déployer la stack

Il faut ajouter une base de donnée pour wordpress. Pour cela:
une fois la stack lancée, on fait un 'docker exec -it srv_mariadb_1 bash' pour se rendre dedans.
Ensuite, on ajoute un utilisateur on crée une base pour que wordpress puisse s'en servir.

La base de donnée est persistante après extinction ou redémarrage puisque nous avons mis un Volume dans le docker-compose.

# Mariadb

Pour construire l'image, nous utilisons un Dockerfile. Dedans, nous intégrons debian ainsi que les dépendances requises pour mariadb.
Nous utilisons un fichier de configuration pour lancer le service mysqld.

# Wordpress

Site : http://monsite.etna/?p=5

Il faut télécharger le zip de Wordpress à partir de Dockerfile, il faut également télécharger Apache2 pour héberger.
Afin d'importer ma configuration, je COPY le fichier 000-default.conf pour l'envoyer dans mon container.
Pour accéder à wordpress, je fais un 'curl -v monsite.etna' et j'obtiendrais le lien d'installation pour le premier usage.
je rentre les informations de mariadb que j'ai configuré auparavant et je précise bien que le db_host est le container mariadb.

Désormais, wordpress est fonctionnel.

# Traefik

Dashboard : http://monsite.etna:8080/dashboard/#/

Pour utiliser des url et me débarrasser des ports j'utilise traefik qui gère cela.
Tout dabord, je télécharge le zip et ensuite je COPY mon fichier traefik.toml pour la configuration.

Dans le fichier de configuration, j'ai activé le tableau de port, activé l'api docker et defini le point d'entrée http 80.

J'ajoute à mon host l'ip de ma vm pour y accéder depuis mon navigateur.

# docker-compose
C'est ce fichier qui sert à lancer tous les containeurs.
Je précise bien que les containeurs redémarrent uniquement lors d'une erreur et j'ajoute la route dans labels pour accéder à wordpress avec monsite.etna.
De plus, je défini les ports dans traefik, j'expose le 8080 pour qu'il accède à mon host et 80 pour l'entrypoint.
Pour finir, j'ajoute mon volume afin que ma base de donnée soit persistante.

Ma stack est désormais globalement fonctionnelle.