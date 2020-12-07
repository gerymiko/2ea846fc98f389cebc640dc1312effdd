<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9883848df4064cf3320076003f9d726
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9883848df4064cf3320076003f9d726::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9883848df4064cf3320076003f9d726::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9883848df4064cf3320076003f9d726::$classMap;

        }, null, ClassLoader::class);
    }
}
