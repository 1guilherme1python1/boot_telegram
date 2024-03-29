<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit269c547d5618c754834064a738c352e6
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TelegramBot\\Api\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TelegramBot\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/telegram-bot/api/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit269c547d5618c754834064a738c352e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit269c547d5618c754834064a738c352e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit269c547d5618c754834064a738c352e6::$classMap;

        }, null, ClassLoader::class);
    }
}
