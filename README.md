# nordea-api

## @todo: 

fix digest signature make same as in https://github.com/mak-it/nordea-filetransfer


### ERRORS
Content digital signature not valid.

Possible reasons for the error to occure:

1- Application request is wrongly formatted or has wrong contents

2- The Certificate is wrong

3- The request is encoded twice


## test:

```
$> composer install
$> composer update
$> php tests/test.php
```
