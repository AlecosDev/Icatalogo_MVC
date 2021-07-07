<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36f7e45244ab82f3044e5b2ac64be575
{
    public static $prefixLengthsPsr4 = array(
        'A' =>
        array(
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array(
        'App\\' =>
        array(
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array(
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36f7e45244ab82f3044e5b2ac64be575::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36f7e45244ab82f3044e5b2ac64be575::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36f7e45244ab82f3044e5b2ac64be575::$classMap;
        }, null, ClassLoader::class);
    }
}
