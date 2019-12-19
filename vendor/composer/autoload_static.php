<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bcc1ac878ce6ad5857dbf59041f093e
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KD\\Wallet\\Tests\\' => 16,
            'KD\\Wallet\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KD\\Wallet\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'KD\\Wallet\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bcc1ac878ce6ad5857dbf59041f093e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bcc1ac878ce6ad5857dbf59041f093e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
