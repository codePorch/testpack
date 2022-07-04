<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit45898e0602b0f29325e7076acf558081
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vin\\Testpack\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vin\\Testpack\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit45898e0602b0f29325e7076acf558081::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit45898e0602b0f29325e7076acf558081::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit45898e0602b0f29325e7076acf558081::$classMap;

        }, null, ClassLoader::class);
    }
}