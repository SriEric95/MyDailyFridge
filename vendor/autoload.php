<?php

if (PHP_VERSION_ID < 70300) {
    echo sprintf("Fatal Error: composer.lock was created for PHP version 7.3 or higher but the current PHP version is %d.%d.%s.\n", PHP_MAJOR_VERSION, PHP_MINOR_VERSION, PHP_RELEASE_VERSION);
    exit(1);
}

// autoload.php @generated by Composer

require_once __DIR__ . '/composer/autoload_real.php';

return ComposerAutoloaderInit317f1520b0e97c392fbcf8ef4da9bbb8::getLoader();
