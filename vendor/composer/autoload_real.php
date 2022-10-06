<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf6d0a5130ea74013c6ce2ec29887372a
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

        spl_autoload_register(array('ComposerAutoloaderInitf6d0a5130ea74013c6ce2ec29887372a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf6d0a5130ea74013c6ce2ec29887372a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf6d0a5130ea74013c6ce2ec29887372a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
