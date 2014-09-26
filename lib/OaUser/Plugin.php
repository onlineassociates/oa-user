<?php
/**
 * Oa User
 *
 * @author Online Associates (zpine) <https://github.com/onlineassociates>
 */
class OaUser_Plugin extends Pimcore_API_Plugin_Abstract implements Pimcore_API_Plugin_Interface
{
    /**
     * Init
     */
    public function init()
    {
        OaUser_Plugin_Control::init();
    }

    /**
     *
     *
     * @return bool
     */
    public static function install()
    {
        OaUser_Plugin_Control::install();
    }

    /**
     * @return bool
     */
    public static function uninstall()
    {
        OaUser_Plugin_Control::uninstall();
        return true;
    }

    /**
     * @return bool
     */
    public static function isInstalled()
    {
        return OaUser_Plugin_Control::isInstalled();
    }

    /**
     * Get Configuration
     *
     * @return array|mixed
     */
    public static function getConfig()
    {
        return OaUser_Plugin_Control::getConfiguration();
    }
}
