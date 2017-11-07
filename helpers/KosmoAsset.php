<?php
namespace renj1e\helpers;

use yii\base\Exception;
use yii\web\AssetBundle as BaseKosmoAsset;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class KosmoAsset extends BaseKosmoAsset
{
    public $sourcePath = '@vendor/renj1e/yii2-kosmo-template/src/';
    public $css = [
        'assets/fonts/kosmo/styles.css',
        'assets/fonts/line-awesome/css/line-awesome.min.css',
        'assets/fonts/montserrat/styles.css',
        'assets/fonts/open-sans/styles.css',
        'assets/fonts/weather/css/weather-icons.min.css',
        'assets/styles/common.min.css',
        'assets/styles/themes/sidebar-black.min.css',
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
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}
