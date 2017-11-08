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
        'libs/bootstrap/css/bootstrap.min.css',
        'libs/font-awesome/css/font-awesome.min.css',
        'assets/fonts/open-sans/styles.css',
        'libs/tether/css/tether.min.css',
        'libs/jscrollpane/jquery.jscrollpane.css',
        'libs/flag-icon-css/css/flag-icon.min.css',
        'assets/styles/common.min.css',

        'assets/styles/themes/primary.min.css',
        'assets/styles/themes/sidebar-black.min.css',
    ];
    public $js = [
        'libs/responsejs/response.min.js',
        'libs/loading-overlay/loadingoverlay.min.js',
        'libs/tether/js/tether.min.js',
        'libs/bootstrap/js/bootstrap.min.js'
        'libs/jscrollpane/jquery.jscrollpane.min.js',
        'libs/jscrollpane/jquery.mousewheel.js',
        'libs/flexibility/flexibility.js',
        
        'assets/scripts/common.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
        // 'yii\bootstrap\BootstrapPluginAsset',
    ];
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }
}
