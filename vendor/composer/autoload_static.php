<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae2074cb67610f49583de1c5de236150
{
    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Endroid' => 
            array (
                0 => __DIR__ . '/..' . '/endroid/qrcode/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitae2074cb67610f49583de1c5de236150::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
