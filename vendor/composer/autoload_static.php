<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e0de676e5436a3f4c6056cbd2eeb42b
{
    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'config' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
        'a' => 
        array (
            'app' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3e0de676e5436a3f4c6056cbd2eeb42b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
