<?php
namespace kilyakus\button;

class ThemeBrandAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/button-brand'],'widget-button-theme-brand');
        parent::init();
    }
}
