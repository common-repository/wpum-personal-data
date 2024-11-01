<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5860101337c98773664b1f50b3bd1577
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'WPUM_Extension_Activation' => __DIR__ . '/..' . '/wp-user-manager/wpum-extension-activation/wpum-extension-activation.php',
        'WP_Requirements_Check' => __DIR__ . '/..' . '/wearerequired/wp-requirements-check/WP_Requirements_Check.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5860101337c98773664b1f50b3bd1577::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5860101337c98773664b1f50b3bd1577::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5860101337c98773664b1f50b3bd1577::$classMap;

        }, null, ClassLoader::class);
    }
}