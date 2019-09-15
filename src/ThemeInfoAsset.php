<?php
namespace kilyakus\button;

use kilyakus\widgets\AssetBundle;

class ThemeInfoAsset extends ThemeAsset
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/button-info']);
        parent::init();
    }
}
