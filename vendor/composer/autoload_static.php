<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5aea5e0bc1aac90649a316ccdbc931d5
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit5aea5e0bc1aac90649a316ccdbc931d5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5aea5e0bc1aac90649a316ccdbc931d5::$classMap;

        }, null, ClassLoader::class);
    }
}
