<center> <h1> Projet Symfony S4 </h1></center>

- Faire le catalogue (traitement de la musique)
- Faire le panier

## Installation

Une fois le projet clone il ne vous reste plus qu'a installer les composants.

```
composer install
```

Puis vous pouvez configurer votre connexion à la base de donnée selon votre machine

Si vous avez importer le fichier sql et établie la connexion vous avez finis !

Si vous avec créer une BDD vierge et établie la connexion vous pourrez charger toutes les données comme ceci.

```
bin/console doctrine:fixtures:load
```

Dans tous les cas vous aurez 3 utilisateurs avec chacun un rôle différent pour voir le fonctionnement du site

|Utilisateur|Mail                  |Mot de pass |
|:---------:|:--------------------:|:----------:|
|user       | user@user            |user        |
|admin      | admin@admin          |admin       |
|super_admin| superAdmin@superAdmin|super_admin |

----
## Autre 

Ce site utilise une template libre de droit que j'ai modifié en grande partie. De plus, n'étant pas le visuel du site qui est pris en compte je me suis pas atterdé dessus et je suis le premier à dire qu'il est loin d'être beau