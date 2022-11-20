
La fonctionnalité majeure de parapluie est l'utilisation du système de fichier pour création de page. Le contenu de chaque page est généré en fonction des fichiers présents dans chaque dossier. L'organisation du contenu est obtenu par l'oganisation des fichiers dans chaque dossier en fonction du nom. 

1. [Support des fichiers markdown](#fichiers-mardown)
2. [Lecture des fichiers html](#fichiers-html)
3. [Execution des scripts PHP](#fichiers-php)
4. [Les médias](#fichiers-medias)

L'entête et le pied des pages sont parametrables et personnalisables dans les fichiers `Includes` de parapluie. Cependant, des notions de programation sont necessaires.

## 1. Support des fichiers markdown <i class="bi bi-markdown-fill"></i>

Les fichiers respectant les normes du langage markdown et portant l'extention `.md` sont nativement interprété par parapluie et traduit en html pour être afficher à l'écran.
L'écriture markdown permet de prendre en supporte les styles de paragraphe, les niveaux de titre, les citations, les images et vidéo, les listes, etc ([documentation Mardown](https://www.markdownguide.org/basic-syntax/)).

*L'ajout d'élément html dans les fichiers markdown est autorisé par l'outil utilisé

##### Exemple :

```
# Titre de niveau 1
## Titre de niveau 2
### Titre de niveau 3
#### Titre de niveau 4
...
###### Titre de niveau 6

paragraph en **gras**, en *italique* et __souligné__

> Ceci est une citation

![image de parapluie width=60%](https://upload.wikimedia.org/wikipedia/commons/8/87/M0354_000727-005_1.jpg)

+ Elément de la liste
+ Elément de la liste
+ Elément de la liste

1. Elément numéroté de la liste
2. Elément numéroté de la liste
3. Elément numéroté de la liste

```

##### Résultat :

# Titre de niveau 1
## Titre de niveau 2
### Titre de niveau 3
...
###### Titre de niveau 6

paragraph en **gras**, en *italique* et __souligné__

> Ceci est une citation

![image de parapluie width=60%](https://upload.wikimedia.org/wikipedia/commons/8/87/M0354_000727-005_1.jpg)

+ Elément de la liste
+ Elément de la liste
+ Elément de la liste

1. Elément numéroté de la liste
2. Elément numéroté de la liste
3. Elément numéroté de la liste

