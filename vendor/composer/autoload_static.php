<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6019136785c633aa4348d8189143f73b
{
    public static $files = array (
        'bf422eb95c8b2116376e76f8bca04ace' => __DIR__ . '/..' . '/blockify/plugin/blockify.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6019136785c633aa4348d8189143f73b::$classMap;

        }, null, ClassLoader::class);
    }
}
