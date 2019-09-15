<?php
namespace kilyakus\button;

use kilyakus\widgets\AssetBundle;

class ThemeSuccessAsset extends ThemeAsset
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/button-success']);
        parent::init();
    }
}
