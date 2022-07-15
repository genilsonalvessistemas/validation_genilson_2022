<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc771c5d020c8a381fb9ed4d0e2775b03
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

        spl_autoload_register(array('ComposerAutoloaderInitc771c5d020c8a381fb9ed4d0e2775b03', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc771c5d020c8a381fb9ed4d0e2775b03', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc771c5d020c8a381fb9ed4d0e2775b03::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
