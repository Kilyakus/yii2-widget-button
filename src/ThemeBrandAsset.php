<?php
namespace kilyakus\button;

use kilyakus\widgets\AssetBundle;

class ThemeBrandAsset extends ThemeAsset
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/button-brand']);
        parent::init();
    }
}
