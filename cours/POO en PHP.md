# La POO en PHP

## Ce qu'elle apporte

La programmation orientée objet apporte de la structure. Cela permet de créer un standard de développement au niveau personnel mais aussi, et surtout au niveau professionnel.
Ce sera plus facile de coder en équipe en passant par de l'orienté objet.

Les objets font partie des types composés (compound) de données en PHP

Ils sont apparus avec PHP 4, mais il y a un changement lors de la v5.
Le concept des objets en PHP se rapproche de celui de Java.

Il est nécessaire de comprendre plusieurs éléments des objets pour commencer la POO (Programmation Orientée Objet), à savoir les classes, la structure d'une classe/d'un objet et les architectures orientées objet.

## La différence avec le procédural

- Création d'une structure au prélable
- Meilleure encapsulation et sécurisation des données

## Les classes

Une classe est le parent d'un objet. Il est nécessaire de créer des classes afin d'avoir des objets.

Il existe toutefois une classe par défaut à laquelle appartient des objets orphelins en PHP.
Cette classe se nomme stdClass et permet d'instancier des objets sans la nécessité d'avoir des Classes existantes. Cette classe n'est toutefois pas sécure et ne permet de rendre compte de la réalité de la programmation orientée objet en PHP.

## Les principes de la programmation orientée objet

La POO possède 4 grands principes : L'abstraction, l'encapsulation, l'héritage, le polymorphisme.

## Principes de base de la POO

- Abstraction : La façon de déterminer les informations nécessaires pour une entité dans le monde extérieur

- Héritage : Le concept de la hiérarchisation du débit de données. Les données devront naviguer du haut vers le bas.

- Encapsulation : Le concept qui permet de décider les données qui navigueront verticalement. (Visibilité
  )
- Polymorphisme : Le concept qui permet de déterminer les changements de comportements en lien avec le besoin créé par l'héritage.

Input -> [POO] -> Output

Parent : Utilisateur -> Enfant : Admin & Modérateur

## Structure des classes/objets en PHP

Pour modéliser des classes on utilise généralement l'UML (de la même façon que pour modéliser des BDD).

Une classe en PHP est définie dans un fichier qui n'a pour but **que la déclaration de cette classe.**

Un nom de classe doit commencer par une lettre, ne doit pas utiliser un nom réservé (ex. PDO, Date, Exception ...) et ne doit pas contenir d'espaces.

Les classes sont la façon de déterminer la structure des données. C'est le squelette de ces données.

- **Propriétés** : Ce sont les variables que chaque objet (ou instances) de la classe vont posséder.
- **Accesseurs/Modificateurs** (Getters/Setters) : Ce sont les fonctions de base qui permettent d'accéder et de modifier les propriétés des objets.
- **Méthodes** : Ce sont les fonctions propres à cette classe que chaque objet (ou instance) de la classe vont posséder. Les méthodes peuvent être surchargées (pensez overwrite) par leurs enfants pour créer une méthode du même nom.
- **Constructeur** : C'est une fonction qui sert lors de la création de chaque objet propre à la classe. Elle permet de définir des valeurs de base pour chaque objet.

- **Modificateurs d'accès** : Les modificateurs ce sont les mots-clés que l'on retrouve avant les propriétés et méthodes de nos classes qui permettent de déterminer la visibilité de ces propriétés/méthodes. **private** : C'est le modificateur qui est le plus restrictif puisqu'il empêche l'accès à l'extérieur de la classe mais aussi lors de l'héritage. **public** : C'est le modificateur le moins restrictif puisqu'il permet l'accès à l'extérieur de la classe mais aussi lors de l'héritage. **protected** : C'est le modificateur qui est conseillé pour l'héritage puisqu'il empêche l'accès à l'extérieur de la classe mais permet l'accès lors de l'héritage.

- **Héritage** : Une classe peut hériter d'une autre classe et récupérer toutes les propriétés et méthodes qui sont publiques ou protected. Cette héritage permet une hiérarchisation de l'application.

- **Abstraction** : On peut créer des classes abstraites qui ne sont pas instantiables, mais qui permettent de définir le squelette des classes qui vont hériter de celle-ci.

**Une classe représente en résumé une famille d'entités.**

Tous les objets feront partie d'une classe.

Pour instancier la classe, on utilisera le mot clé `new` et on l'attribuera à une variable.

```php
$objet = new Classe()
```

### Accéder/Modifier les propriétés

Pour accéder et modifier les propriétés il existe plusieurs méthodes.

La première méthode consiste à **instancier notre classe** (new NomDeLaClasse, généralement en attribuant ceci à une variable) et à assigner des valeurs à ses propriétés **si et seulement si, ces propriétés sont publiques**.

La seconde méthode consiste à utiliser des accesseurs et mutateurs (**les méthodes get et set respectivement**) pour ces objets.

```php
    public function getProperty(){}
    public function setProperty($newProperty){}
```

On peut aussi modifier les valeurs des propriétés d'un objet à l'aide d'un **constructeur**.

## Architectures orientées objet

Dans une architecture orientée objet, il existe plusieurs concepts à suivre. Ces concepts sont définis par l'architecture que l'on va utiliser mais on retrouve quelques éléments communs entre eux.
De manière générale, il est recommandé d'utiliser des **Objets d'Accès aux Données (en anglais DAO)** qui permettent de faciliter l'utilisation des classes qui contiennent des données.
On retrouve aussi le **Routeur** qui s'occupe du Routing, et produit les redirections vers les pages contenant du contenu.
Il existe parfois une classe **Viewer** qui permet de traiter le contenu à afficher.

Ces classes sont des classes génériques et on aura tendance à rendre certaines de leurs méthodes **statiques** puisqu'une seule instance de ces classes suffit en général.
