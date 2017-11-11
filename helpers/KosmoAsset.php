<?php
namespace backend\assets\kosmo;

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

        'assets/styles/themes/jungle-green.min.css',
        'assets/styles/themes/sidebar-black.min.css',

        'assets/styles/widgets/panels.min.css',
        'assets/scripts/charts/area/area.chart.min.css',
        'assets/scripts/charts/radial-progress/radial-progress.chart.min.css',
        // 'assets/fonts/kosmo/styles.css',
        // 'assets/fonts/weather/css/weather-icons.min.css',
        // 'libs/c3js/c3.min.css',
        // 'libs/noty/noty.css',
        // 'assets/styles/widgets/payment.min.css',
        // 'assets/styles/dashboard/tabbed-sidebar.min.css',
    ];
    public $js = [
        'libs/jquery/jquery.min.js',
        'libs/responsejs/response.min.js',
        'libs/loading-overlay/loadingoverlay.min.js',
        'libs/tether/js/tether.min.js',
        'libs/bootstrap/js/bootstrap.min.js',
        'libs/jscrollpane/jquery.jscrollpane.min.js',
        'libs/jscrollpane/jquery.mousewheel.js',
        'libs/flexibility/flexibility.js',
        'assets/scripts/common.min.js',

        // 'libs/d3/d3.min.js',
        // 'libs/c3js/c3.min.js',
        // 'libs/noty/noty.min.js',
        // 'libs/maplace/maplace.min.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
        // 'yii\bootstrap\BootstrapPluginAsset',
    ];
}
