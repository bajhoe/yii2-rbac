<?php

namespace infinindotech\rbac;

use yii\base\Module;

/**
 * Rbac console module.
 * 
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class RbacConsoleModule extends Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'infinindotech\rbac\commands';
}