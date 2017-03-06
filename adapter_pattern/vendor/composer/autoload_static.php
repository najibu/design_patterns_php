<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14ef8826e04f55d5ac50fa2fc3d0b359
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit14ef8826e04f55d5ac50fa2fc3d0b359::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14ef8826e04f55d5ac50fa2fc3d0b359::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
