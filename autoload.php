<?php
/**
 * autoload.php
 *
 * Use it without composer, cant in cli.
 *
 * <code>
 * include "/your_path/farwish/alcon/autoload.php";
 * </code>
 *
 * @farwish.
 */

class AlconAutoload
{
    const ALCON_NAMESPACE = 'Alcon\\';
    const ALCON_BASEDIR = 'src/';
    const ALCON_EXT = '.php';
    
    public static function psr4($name)
    {
        $name = str_replace([self::ALCON_NAMESPACE, '\\'], [self::ALCON_BASEDIR, DIRECTORY_SEPARATOR], $name);
        $file = __DIR__ . DIRECTORY_SEPARATOR . $name . self::ALCON_EXT;
        if (! file_exists($file) ) die("File not exists : {$file}\n");
        include_once $file;
    }
}

spl_autoload_register('AlconAutoload::psr4');
