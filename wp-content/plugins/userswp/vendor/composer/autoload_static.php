<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb12a73f1ea855fdcb35c00228f6126f
{
    public static $files = array (
        'e8d544c98e79f913e13eae1306ab635e' => __DIR__ . '/..' . '/ayecode/wp-ayecode-ui/ayecode-ui-loader.php',
        '24583d3588ebda5228dd453cfaa070da' => __DIR__ . '/..' . '/ayecode/wp-font-awesome-settings/wp-font-awesome-settings.php',
    );

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
        'AyeCode_Connect_Helper' => __DIR__ . '/..' . '/ayecode/ayecode-connect-helper/ayecode-connect-helper.php',
        'WP_Super_Duper' => __DIR__ . '/..' . '/ayecode/wp-super-duper/wp-super-duper.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb12a73f1ea855fdcb35c00228f6126f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb12a73f1ea855fdcb35c00228f6126f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb12a73f1ea855fdcb35c00228f6126f::$classMap;

        }, null, ClassLoader::class);
    }
}
