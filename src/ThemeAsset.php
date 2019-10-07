<?php
namespace kilyakus\button;

class ThemeAsset extends \kilyakus\widgets\AssetBundle
{
    public $depends = [
        'kilyakus\library\base\BaseAsset',
        'kilyakus\button\ButtonAsset'
    ];
}
