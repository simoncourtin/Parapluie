# Parapluie &#9730;

Parapluie est une solution web qui permet de créer un site internet rapidement et facilement. Parapluie utilise l'architecture de fichier et de dossier afin de créer les différentes pages et leur contenu. Ainsi pas besoin de base de données pour stocker vos pages et autres éléments.

Les pages sont générées à partir du dossier `Data/Pages/` et leurs contenus par les fichiers présents dans chacun d'entre eux. Le nom et l'ordre de chaque page sont directement tirés du titre de chaque dossier. Parapluie prend en charque un grand nombre de types de document pour générer le contenu des page. Les fichiers markdown .md et HTML sont nativement interprété. Il est également possible de mettre des images (.jpg et .png). Les fichiers PHP sont également pris en compte permettant ainsi d'entrevoir une infinité de possibilités pour satisfaire tous vos besoins web.

## Installation &#127746;

Veuillez télécharger le dossier de base et le copier a la racine de votre serveur ou l'emplacement de votre site web

## Configuration &#9730;

parametres.txt contient la configuration de base de votre site web

>titre_site:Titre du site

>sous_titre_site:Sous titre du site

>default_page:Nom du dossier de la page par défaut

## Gestion du contenu &#9748;

### Les pages

- Créer une page : Ajouter un nouveau dossier dans /Data/Pages/
- Supprimer une page : supprimer le dossier de la page
- Renommer une page : renommer le dossier
- Ordonner les pages : ajouter le numéro-nom du dossier. exemple :
  - 1-Accueil
  - 2-Contact
  - 3-...
- Pour cacher une page : ajouter '-' devant le nom du dossier

### Le contenu des pages

- Créer un contenu : créer un nouveau fichier dans le dossier de la page markdown, php ou HTML
- Modifier un contenu : modifier le contenu du fichier
- Supprimer un contenu : supprimer le fichier

Une interface utilisateur basique est installée de base et permet de modifier uniquement les fichiers HTML

## Pour les développeurs &#128736;

### Les scripts PHP
Parapluie supporte les scripts PHP dans les pages. Les fichiers PHP présents dans les dossiers des pages sont interprétés dans l'ordre défini par le nom du fichier. Le support du langage PHP permet de proposer une souplesse dans le déploiement de l'outil et ne permet de convenir au plus grand nombre. Les scripts PHP peuvent ainsi permettre de développer des fonctionnalités plus ou moins importantes comme le traitement des formulaires de contact ou même la gestion d'un [blog](/index.php?page=4-Blog).

Aucune base de données n'est livrée avec la version de base de Parapluie. Cependant, l'utilisation de script PHP peut permettre l'interfaçage de Parapluie avec cette n'importe quelle base de données.

### Les fichiers PHP
Fichiers du dossier inculdes :
- body.inc.php : contenu du corps du site avec la balise body
- footer.inc.php : contenu du footer et balise footer
- header.inc.php : Contenu du header
- menu.inc.php : Generation du menu ou seules les pages non cachées sont affichées
- parameters.inc.php : variables globales utiles au fonctionnement du site. possibilités d'ajout
de variable globale pour les scripts PHP
- rooter.inc.php : rooter pour la redirection des pages ...

## Pourquoi Parapluie &#9730; ?

Le parapluie est un objet simple d'utilisation, qui peut être emmené partout et se déploie rapidement et n'importe où lorsque la pluie arrive.C'est un objet très personnalisable.

Parapluie est une solution web relativement facile d'utilisation, se déploie très vite sur un serveur et il suffit de faire un simple copier-coller du dossier racine pour le déplacer d'un endroit a une autre.

