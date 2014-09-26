<?php
/**
 * Oa User
 *
 * @author Online Associates (zspine) <https://github.com/onlineassociates>
 */
class OaUser_Plugin_Control
{
    /**
     * Load at configuration
     */
    public static function init()
    {
        OaUser_Config::loadFromFile(self::getConfigFilename());
    }

    /**
     * Get Configuration Path
     *
     * @return string
     */
    public static function getConfigFilename()
    {
        return PIMCORE_WEBSITE_PATH . '/var/plugins/OaUser/config.php';
    }

    /**
     * Check if the plugin is installed or not
     */
    public static function isInstalled()
    {
        return is_file(self::getConfigFilename());
    }

    /**
     * Install
     */
    public static function install()
    {
        self::_createConfigFile();

        if(self::isInstalled())
        {
            return "OaUser Plugin successfully installed.";
        }
        else
        {
            return "OaUser Plugin could not be installed";
        }
    }

    /**
     * Uninstall
     */
    public static function uninstall()
    {
        unlink(self::getConfigFilename());

        if(!self::isInstalled())
        {
            return "OaUser Plugin successfully uninstalled.";
        }
        else
        {
            return "OaUser Plugin could not be uninstalled";
        }
    }

    /**
     * @return string
     */
    public static function getPluginPath()
    {
        return PIMCORE_PLUGINS_PATH . "/OaUser";
    }

    /**
     * Create Config File
     */
    private static function _createConfigFile()
    {
        $filename = self::getConfigFilename();
        if(!file_exists($filename))
        {
            mkdir(PIMCORE_WEBSITE_PATH . '/var/plugins/OaUser/');
            $data = '<?php
                return [];
            ';

            file_put_contents($filename, $data);
        }
    }

}