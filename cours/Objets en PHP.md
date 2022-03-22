# Les objets en PHP

Les objets font partie des types composés (compound) de données en PHP

Ils sont apparus avec PHP 4, mais il y a un changement lors de la v5.
Le concept des objets en PHP se rapproche de celui de Java.

Il est nécessaire de comprendre plusieurs éléments des objets pour commencer la POO (Programmation Orientée Objet), à savoir les classes, la structure d'une classe/d'un objet et les architectures orientées objet.

## Les classes

Une classe est le parent d'un objet. Il est nécessaire de créer des classes afin d'avoir des objets.

Il existe toutefois une classe par défaut à laquelle appartient des objets orphelins en PHP.
Cette classe se nomme stdClass et permet d'instancier des objets sans la nécessité d'avoir des Classes existantes. Cette classe n'est toutefois pas sécure et ne permet de rendre compte de la réalité de la programmation orientée objet en PHP.

## Les principes de la programmation orientée objet

La POO possède 3 grands principes : L'encapsulation, l'héritage, le polymorphisme.

### Encapsulation

L'encapsulation veut que l'on cache les détails d'une classe (ses constantes et ses propriétés) mais que l'on exposte uniquement ses méthodes.
Afin de réduire la complexité de l'application et de protéger l'état interne de nos objets.

### Héritage

### Polymorphism

## Structure des classes/objets en PHP

Pour modéliser des classes on utilise généralement l'UML (de la même façon que pour modéliser des BDD).

Une classe en PHP est définie dans un fichier qui n'a pour but **que la déclaration de cette classe.**

Un nom de classe doit commencer par une lettre, ne doit pas utiliser un nom réservé (ex. PDO, Date, Exception ...) et ne doit pas contenir d'espaces.

Une classe possède des **propriétés** et des **méthodes** :

    - Une propriété est un attribut propre à la classe ou à un objet de cette classe. Une propriété peut être n'importe lequel des types en PHP.

    - Une méthode est une fonction propre à la classe ou à un objet de cette classe.

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
