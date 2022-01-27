<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b51292403ecf1448868f27b6da42dee
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b51292403ecf1448868f27b6da42dee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b51292403ecf1448868f27b6da42dee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b51292403ecf1448868f27b6da42dee::$classMap;

        }, null, ClassLoader::class);
    }
}
