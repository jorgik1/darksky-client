<?php
$keyFile = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'token.php';
if (!file_exists($keyFile)) {
    echo 'No key file find, copy token.sample.php to token.php.', PHP_EOL;
    exit(1);
}
return require $keyFile;