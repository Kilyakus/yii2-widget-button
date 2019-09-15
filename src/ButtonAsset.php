<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2018
 * @package yii2-widgets
 * @subpackage yii2-widget-select2
 * @version 2.1.4
 */

namespace kilyakus\button;

use kilyakus\widgets\AssetBundle;

class ButtonAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/button']);
        parent::init();
    }
}
