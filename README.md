# Parapluie &#9730;

Parapluie est une solution web qui permet de créer un site internet rapidement et facilement. Parapluie utilise l'architecture de fichier et de dossier afin de créer les différentes pages et leur contenu.

Parapluie utilise les dossiers contenus dans le dossier Data/Pages/ pour créer les différentes pages du site. Les pages porterons le nom des dossiers.
Le contenu de chaque page est généré par les fichiers dans leur dossier respectifs. Les extention .md, html et php sont gérer par défaut.

## Installation &#127746;

Veuillez télécharger le dossier de base et le copier a la racine de votre serveur ou l'emplacement de votre site web

## Configuration &#9730;

parametres.txt contient la configuration de base de votre site web

>titre_site:Titre du site

>sous_titre_site:Sous titre du site

>default_page:Nom du dossier de la page par defaut

## Gestion du contenu &#9748;

### Les pages

- Créer une page : Ajouter un nouveau dossier dans /Data/Pages/
- Supprimer une page : Supprimer le dossier de la page
- Renommer une page : Renommer le dossier
- Ordonner les pages : Ajouter numéro-nom du dossier. exemple :
  - 1-Accueil
  - 2-Contact
  - 3-...
- Pour cacher une page : ajouter '-' devant le nom du dossier

### Le contenu des pages

- Créer un contenu : Créer un nouveau fichier dans le dossier de la page markdown, php ou html
- Modifier un contenu : Modifier le contenu du fichier
- Supprimer un contenu : Supprimer le fichier

Une interface utilisateur basique est installee de base et permet de modifier uniquement les fichiers html

## Pour les developpeurs &#128736;

Parapluie supporte les scripts PHP dans les pages telque les formulaires de contact, ...

Fichiers du dossier inculdes :
- body.inc.php : contenu du corps du site avec la balise body
- footer.inc.php : contenu du footer et balise footer
- header.inc.php : Contenu du header
- menu.inc.php : Generation du menu ou seule les pages non cachées sont affichées
- parameters.inc.php : variables globales utile au fonctionnement du site. possibilités d'ajout
de varible globale pour les scripts PHP
- rooter.inc.php : rooter pour la redirection des pages, ...

## Pourquoi Parapluie &#9730; ?

Le parapluie est un objet facile d'utilisation. C'est un objet qui peut etre emmener partout et quand la pluie arrive il se deploie rapidement. De plus c'est un objet tres personnalisable.

Parapluie est une solution web relativement facile d'utilisation, se deploie tres vite sur un serveur et il suffit de faire un simple copier-coller du dossier racine pour le deplacer d'un endroit a une autre.

