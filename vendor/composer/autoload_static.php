<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit985a94e03ea43a0e252bb578db9408da
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit985a94e03ea43a0e252bb578db9408da::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
