<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf3ad978fb8e0327f5a3b72d4d1da30f0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitf3ad978fb8e0327f5a3b72d4d1da30f0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf3ad978fb8e0327f5a3b72d4d1da30f0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf3ad978fb8e0327f5a3b72d4d1da30f0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
