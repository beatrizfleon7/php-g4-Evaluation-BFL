### Enoncé exercice de évaluation module W14

Le but final de cette validation sera de créer une interface admin qui permette d’afficher ou non un contenu spécifique. Pour cela, vous créerez un vue, liée au thème de votre site, dans laquelle vous aurez plusieurs blocs (textes, images, ou autres). Mettre en place une page de login, qui permette de se connecter à la partie admin si les bons logs ont été rentrés (ces éléments pourront être codé « en dur » dans l’application).

### Nom d'utilisateur et mot de passe

- Username: greta
- Password: 1234

### Arbre d'arborescence du projet

.
├── README.md
├── admin.php
├── connection.php
├── controllers
│ ├── login.php
│ ├── logout.php
│ └── validation.php
├── css
│ ├── footer.css
│ ├── header.css
│ └── style.css
├── destinations.php
├── img
│ ├── avatar.png
│ ├── contenu.jpg
│ ├── header.png
│ └── montagne.jpg
├── index.php
└── templates
├── footer.php
└── header.php

### Functionnement de la page

Ce page web s'agit d'une menu de navigation, avec un contenu dans le fichier destinations.php auquel on ne peut qu'avoir l'accès que quand l'utilisateur est enregitré et il fait l'envoie d'un formulaire rempli pour choisir la destination des ces vacances. Si l'utilisateur choisi le destin montagne ou plage il pourra voir la photo de son destination.
