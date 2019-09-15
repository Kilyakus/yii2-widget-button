<?php
namespace kilyakus\button;

use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Inflector;

/**
 * Button renders a engine button.
 *
 * For example,
 *
 * ```php
 * echo Button::widget([
 *     'title' => 'Action',
 *     'icon' => 'fa fa-folder',
 *     'iconPosition' => Button::ICON_POSITION_LEFT,
 *     'size' => Button::SIZE_SMALL,
 *     'disabled' => false,
 *     'block' => false,
 *     'type' => Button::TYPE_DANGER,
 * ]);
 * ```
 */
class Button extends \yii\bootstrap\Button
{
    public $pluginName = 'button';
    /**
     *  Button bootstrap types
     */
    const TYPE_DEFAULT = 'default';
    const TYPE_BRAND = 'brand';
    const TYPE_DANGER = 'danger';
    const TYPE_DARK = 'dark';
    const TYPE_INFO = 'info';
    const TYPE_LIGHT = 'light';
    const TYPE_PRIMARY = 'primary';
    const TYPE_SECONDARY = 'secondary';
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';

    const SIZE_MINI = 'xs';
    const SIZE_SMALL = 'sm';
    const SIZE_LARGE = 'lg';

    const ICON_POSITION_LEFT = 'left';
    const ICON_POSITION_RIGHT = 'right';

    public $title;

    /**
     * @var string The button size.
     * Valid values are 'xs', 'sm', 'lg'.
     */
    public $size;

    /**
     * @var string The button type.
     * Valid values for engine styles are 'default', 'red', 'blue', 'green', 'yellow', 'purple', 'dark'.
     * Valid values for bootstrap styles are 'primary', 'info', 'success', 'warning', 'danger', 'inverse', 'link'.
     */
    public $type = self::TYPE_DEFAULT;

    public $color = '';

    public $icon;
    public $iconPosition = self::ICON_POSITION_LEFT;

    public $disabled = false;

    public $block = false;

    public $outline = false;

    public $hover = false;

    public $elevate = false;

    public $air = false;

    public $pill = false;

    public $label = false;

    private $_sizes = [
        self::SIZE_MINI,
        self::SIZE_SMALL,
        self::SIZE_LARGE,
    ];

    protected static $_inbuiltTypes = [
        self::TYPE_DEFAULT,
        self::TYPE_BRAND,
        self::TYPE_DANGER,
        self::TYPE_DARK,
        self::TYPE_INFO,
        self::TYPE_LIGHT,
        self::TYPE_PRIMARY,
        self::TYPE_SECONDARY,
        self::TYPE_SUCCESS,
        self::TYPE_WARNING,
    ];

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

        if (static::TYPE_DEFAULT !== $this->type)
        {
            Html::addCssClass($this->options, sprintf('btn-%s', $this->type));
        }

        Html::addCssClass($this->options, $this->color);

        if (in_array($this->size, $this->_sizes))
        {
            Html::addCssClass($this->options, 'btn-' . $this->size);
        }

        if ($this->disabled === true)
        {
            Html::addCssClass($this->options, 'disabled');
        }

        if ($this->block === true)
        {
            Html::addCssClass($this->options, 'btn-block');
        }
        if(!isset($this->options['type']))
        {
            $this->options['type'] = 'button';
        }

    }

    public function run()
    {
        $title = $this->encodeLabel ? Html::encode($this->title) : $this->title;

        if ($this->icon !== null)
        {
            $icon = Html::tag('i', '', ['class' => $this->icon]);
            $title = strcasecmp($this->iconPosition, self::ICON_POSITION_LEFT) === 0 ? sprintf('%s %s', $icon, $title) : sprintf('%s %s', $title, $icon);
        }

        echo Html::tag($this->tagName, $title, $this->options);

        $this->registerPlugin('button');
        $this->registerAssets();
    }

    public function registerAssetBundle()
    {
        $view = $this->getView();
        ButtonAsset::register($view);
        if (in_array($this->type, self::$_inbuiltTypes)) {
            $bundleClass = __NAMESPACE__ . '\Theme' . Inflector::id2camel($this->type) . 'Asset';
            $bundleClass::register($view);
        }
    }

    public function registerAssets()
    {
        $this->registerAssetBundle();
        $this->registerPlugin($this->pluginName);
    }
}
