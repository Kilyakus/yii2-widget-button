<?php
namespace kilyakus\button;

class ThemeDarkAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/button-dark'],'widget-button-theme-dark');
        parent::init();
    }
}
