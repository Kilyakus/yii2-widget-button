<?php
namespace kilyakus\button;

class ThemeLinkAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/button-link'],'widget-button-theme-link');
        parent::init();
    }
}
