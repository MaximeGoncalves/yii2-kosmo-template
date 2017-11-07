<?php
namespace renj1e\src\helpers;

use yii\base\Exception;
use yii\web\AssetBundle as BaseKosmoAsset;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class KosmoAsset extends BaseKosmoAsset
{
    public $sourcePath = '@vendor/renj1e/src/';
    public $css = [
        'assets/fonts/kosmo/styles.css',
        'assets/fonts/line-awesome/css/line-awesome.min.css',
        'assets/fonts/montserrat/styles.css',
        'assets/fonts/open-sans/styles.css',
        'assets/fonts/weather/css/weather-icons.min.css',
        'assets/styles/common.min.css',
        'assets/styles/themes/',
        'assets/styles/themes/primary.min.css',
    ];
    public $js = [
        'assets/scripts/common.min.js',
        'assets/scripts/kosmo.widget-controls.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @var string|bool Choose skin color, eg. `'skin-blue'` or set `false` to disable skin loading
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout
     */
    public $skin = '_all-skins';

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Append skin color file if specified
        if ($this->skin) {
            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid skin specified');
            }

            $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
        }

        parent::init();
    }
}
