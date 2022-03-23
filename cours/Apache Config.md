# Configurer un serveur apache

## Modifier le dossier racine

Pour modifier le dossier quand on utilise une stack LAMP on va devoir modifier le fichier **httpd-vhosts.conf** (Ils ont des emplacements différents selon le programme).

Dans ce fichier, il faudra créer un hôte virtuel (donc un hôte pour notre site qui va bypass localhost, ou tout simplement prendre le contrôle de localhost).

```conf
<VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host2.example.com
    DocumentRoot "C:/xampp/htdocs/oop_2022/"
    ##ServerName oop.local
    ##ErrorLog "logs/dummy-host2.example.com-error.log"
    ##CustomLog "logs/dummy-host2.example.com-access.log" common
</VirtualHost>
```

## Alternative

On peut rajouter un nouveau port d'écoute dans le fichier **httpd.conf** et configurer l'hôte virtuel afin qu'il accède directement au dossier s'il on est sur ce port d'écoute.

```conf
Listen 88
```

```conf
<VirtualHost *:88>
```

## Configurer un nom de serveur

Pour configurer une URL de serveur customisée, il faudra changer le ServerName dans l'hôte virtuel. Mais aussi ajouter cette URL dans le fichier hosts de windows (Il est situé à X:/Windows/System32/drivers/etc, attention il faut les droits admin pour modifier ce fichier).

```conf
<VirtualHost *:88>
    ##ServerAdmin webmaster@dummy-host2.example.com
    DocumentRoot "C:/xampp/htdocs/oop_2022/"
    ServerName oop.local
    ##ErrorLog "logs/dummy-host2.example.com-error.log"
    ##CustomLog "logs/dummy-host2.example.com-access.log" common
</VirtualHost>
```

```
127.0.0.1 oop.local
```
