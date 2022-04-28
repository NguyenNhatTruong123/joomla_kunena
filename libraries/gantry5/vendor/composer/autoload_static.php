<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2076b63ca66e75d599130c55840382cf
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'ScssPhp\\ScssPhp\\' => 16,
        ),
        'R' => 
        array (
            'RocketTheme\\Toolbox\\StreamWrapper\\' => 34,
            'RocketTheme\\Toolbox\\Session\\' => 28,
            'RocketTheme\\Toolbox\\ResourceLocator\\' => 36,
            'RocketTheme\\Toolbox\\File\\' => 25,
            'RocketTheme\\Toolbox\\Event\\' => 26,
            'RocketTheme\\Toolbox\\DI\\' => 23,
            'RocketTheme\\Toolbox\\Compat\\' => 27,
            'RocketTheme\\Toolbox\\Blueprints\\' => 31,
            'RocketTheme\\Toolbox\\ArrayTraits\\' => 32,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
        'G' => 
        array (
            'Gantry\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'ScssPhp\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/scssphp/scssphp/src',
        ),
        'RocketTheme\\Toolbox\\StreamWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/rockettheme/toolbox/StreamWrapper/src',
        ),
        'RocketTheme\\Toolbox\\Session\\' => 
        array (
            0 => __DIR__ . '/..' . '/rockettheme/toolbox/Session/src',
        ),
        'RocketTheme\\Toolbox\\ResourceLocator\\' => 
        array (
            0 => __DIR__ . '/..' . '/rockettheme/toolbox/ResourceLocator/src',
        ),
        'RocketTheme\\Toolbox\\File\\' => 
        array (
            0 => __DIR__ . '/..' . '/rockettheme/toolbox/File/src',
        ),
        'RocketTheme\\Toolbox\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/rockettheme/toolbox/Event/src',
        ),
        'RocketTheme\\Toolbox\\DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/rockettheme/toolbox/DI/src',
        ),
        'RocketTheme\\Toolbox\\Compat\\' => 
        array (
            0 => __DIR__ . '/..' . '/rockettheme/toolbox/Compat/src',
        ),
        'RocketTheme\\Toolbox\\Blueprints\\' => 
        array (
            0 => __DIR__ . '/..' . '/rockettheme/toolbox/Blueprints/src',
        ),
        'RocketTheme\\Toolbox\\ArrayTraits\\' => 
        array (
            0 => __DIR__ . '/..' . '/rockettheme/toolbox/ArrayTraits/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
        'Gantry\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/classes/Gantry',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
            'ParsedownExtra' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown-extra',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2076b63ca66e75d599130c55840382cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2076b63ca66e75d599130c55840382cf::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2076b63ca66e75d599130c55840382cf::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2076b63ca66e75d599130c55840382cf::$classMap;

        }, null, ClassLoader::class);
    }
}
