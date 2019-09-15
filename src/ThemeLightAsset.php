<?php
namespace kilyakus\button;

use kilyakus\widgets\AssetBundle;

class ThemeLightAsset extends ThemeAsset
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/button-light']);
        parent::init();
    }
}
