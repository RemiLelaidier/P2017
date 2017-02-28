# Creation des migrations

```
php vendor/bin/phinx create MyFirstMigration -c config-phinx.php 
```

# Lancer les migrations

```
php vendor/bin/phinx migrate -c config-phinx.php
```

# Lancer les seeders

```
php vendor/bin/phinx seed:run
```

# Technologies

+ Framework Slim3
+ Twig
+ Eloquent
+ Phinx