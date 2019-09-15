<?php
namespace kilyakus\button;

use kilyakus\widgets\AssetBundle;

class ThemeSecondaryAsset extends ThemeAsset
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/button-secondary']);
        parent::init();
    }
}
