<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37d78e27aafe7a8c8237b44eebc79044
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'I' => 
        array (
            'Its\\Sso\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Its\\Sso\\' => 
        array (
            0 => __DIR__ . '/..' . '/myits/openid-connect-client/src',
        ),
    );

    public static $classMap = array (
        'Jumbojett\\OpenIDConnectClient' => __DIR__ . '/..' . '/jumbojett/openid-connect-php/src/OpenIDConnectClient.php',
        'Jumbojett\\OpenIDConnectClientException' => __DIR__ . '/..' . '/jumbojett/openid-connect-php/src/OpenIDConnectClient.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37d78e27aafe7a8c8237b44eebc79044::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37d78e27aafe7a8c8237b44eebc79044::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37d78e27aafe7a8c8237b44eebc79044::$classMap;

        }, null, ClassLoader::class);
    }
}
