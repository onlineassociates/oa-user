<?php
/**
 * Class Config
 *
 * <code>
 *
 * //Some where on the application bootstrap, load the config once
 * OaUser_Config::loadFromFile('/path/to/config.php');
 *
 * //using the configuration in classes and other places
 * $dbConfig = OaUser_Config::get('db');
 *
 * echo $dbConfig['host'];
 *
 * </code>
 *
 * @author Online Associates (zspine) <https://github.com/onlineassociates>
 */
class OaUser_Config
{
    /**
     * @var array
     */
    protected static $storage = array();

    /**
     * sets a value
     *
     * @param string $key
     * @param mixed $value
     *
     * @static
     * @return void
     */
    public static function set($key, $value)
    {
        self::$storage[$key] = $value;
    }

    /**
     * Get Key
     *
     * @param $key
     * @param bool $default
     * @return bool
     */
    public static function get($key, $default=false)
    {
        return (!self::$storage[$key]) ? $default : self::$storage[$key];
    }

    /**
     * Load From file
     *
     * @param $filename
     * @return array
     * @throws Exception
     */
    public static function loadFromFile($filename)
    {
        if(!file_exists($filename))
        {
            throw new Exception($filename . ' not found');
        }

        $config = include $filename;

        foreach($config as $key => $value)
        {
            self::set($key, $value);
        }
        return self::$storage;
    }
}