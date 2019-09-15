<?php
namespace kilyakus\button;

use kilyakus\widgets\AssetBundle;

class ThemeDefaultAsset extends ThemeAsset
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/button-default']);
        parent::init();
    }
}
