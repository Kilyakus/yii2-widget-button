<?php
namespace kilyakus\button;

class ButtonAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/widget-button'],'widget-button');
        parent::init();
    }
}
