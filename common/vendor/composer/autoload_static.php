<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6764455bce3fbe3241f232aeff07da83
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tribe\\' => 6,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tribe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Tribe',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'x' => 
        array (
            'xrstf\\Composer52' => 
            array (
                0 => __DIR__ . '/..' . '/xrstf/composer-php52/lib',
            ),
        ),
        't' => 
        array (
            'tad_DI52_' => 
            array (
                0 => __DIR__ . '/..' . '/lucatume/di52/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6764455bce3fbe3241f232aeff07da83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6764455bce3fbe3241f232aeff07da83::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6764455bce3fbe3241f232aeff07da83::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
