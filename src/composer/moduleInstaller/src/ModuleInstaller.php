<?php
/**
 * Created by PhpStorm.
 * User: Seredos
 * Date: 02.10.2016
 * Time: 02:14
 */

namespace composer\moduleInstaller;


use Composer\Script\Event;

class ModuleInstaller
{
    public static function installRoot(Event $event)
    {
        var_dump($event);
    }
}