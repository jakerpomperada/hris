<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0337c44c4ac15eec9a79c11af0f77c9e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phpml\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phpml\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-ai/php-ml/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0337c44c4ac15eec9a79c11af0f77c9e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0337c44c4ac15eec9a79c11af0f77c9e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
