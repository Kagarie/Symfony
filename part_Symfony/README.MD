# Projet Symfony S4 

---

## Installation

```
git clone https://github.com/Kagarie/Symfony.git
cd Symfony
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

Ce site utilise une template libre de droit que j'ai modifié en grande partie. De plus, n'étant pas le visuel du site qui est pris en compte je me suis pas atterdé dessus.
