```shell
 php ./bin/get-custom-fixers.php
```

With friendsofphp/php-cs-fixer <3.90.0, list of custom fixers is not empty.

With friendsofphp/php-cs-fixer 3.90.0, list is empty.  
    - If you remove `/vendor/` from `.gitignore` file list is not empty again.  
    - If you remove `.git` folder list is not empty again.  

```shell
./vendor/bin/php-cs-fixer fix
```
With friendsofphp/php-cs-fixer <3.90.0, rules are applied.  
With friendsofphp/php-cs-fixer 3.90.0: The rules contain unknown fixers: "ErickSkrauch/align_multiline_parameters".
