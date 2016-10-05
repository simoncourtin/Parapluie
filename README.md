# Arki

Arki est un logiciel permet de creer un site internet qui utilise l'architecture de fichiers et de dossiers afin de creer les differentes pages
et leur contenu.

Arki utilise les dossiers contenu dans le dossier Data/Pages pour creer les differentes pages du site. Les page porterons le nom des dossiers.
Le contenu de chaque page est genere par les fichiers dans leur dossiers. Les extention .md, html et php sont gerer.

## Installation

Veuillez télécharger le dossier de base et le copier a la racine de votre serveur ou l'emplacement de votre site web

## Configuration

parametres.txt contient la configuration de base de votre site web

>titre_site:Titre du site

>sous_titre_site:Sous titre du site

>default_page:Nom du dossier de la page par defaut

## Gestion du contenu

### Les pages

- Creer une page : Ajouter un nouveau dossier dans /Data/Pages
- Supprimer une page : Supprimer le dossier de la page
- Renommer une page : Renommer le dossier
- Ordonner les pages : Ajouter num-nom du dossier. exemple :
  - 1-Accueil
  - 2-Contact
  - 3-...
- Pour cacher une page : ajouter '-' devant le nom du dossier

### Le contenu des pages

- Creer un contenu : Creer un nouveau fichier dans le dossier de la page markdown, php ou html
- Modifier un contenu : Modifier le contenu du fichiers
- Supprimer un contenu : Supprimer le fichier

Une interface utilisateur basique est installee de base et permet de modifier uniquement les fichier html

## Pour les developpeurs

Arki supporte les scripts PHP dans les pages telque les formulaires de contact, ...

Fichiers du dossier inculdes :
- body.inc.php : contenu du corps du site avec la balise body
- footer.inc.php : contenu du footer et balise footer
- header.inc.php : Contenu du header
- menu.inc.php : Generation du menu ou seule les pages non cachees sont affichees
- parameters.inc.php : variable globales utiles au fonctionnement du site. possibilites d'ajout
de varible globales pour les scripts PHP
- rooter.inc.php : rooter pour la redirection des pages, ...



