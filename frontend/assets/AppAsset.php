<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'asset/css/bootstrap.min.css',
        'asset/css/font-awesome.min.css',
        'asset/css/bootstrap-grid.min.css',
        'asset/css/bootstrap-reboot.min.css',
        'asset/css/font-techmarket.css',
        'asset/css/slick.css',
        'asset/css/techmarket-font-awesome.css',
        'asset/css/slick-style.css',
        'asset/css/animate.min.css',
        'asset/css/style.css',
        'asset/css/colors/yellow.css',
        'https://fonts.googleapis.com/css?family=Rubik:300,400,500,900',
    ];
    public $js = [
        'asset/js/jquery.min.js',
        'asset/js/tether.min.js',
        'asset/js/bootstrap.min.js',
        'asset/js/jquery-migrate.min.js',
        'asset/js/hidemaxlistitem.min.js',
        'asset/js/jquery-ui.min.js',
        'asset/js/hidemaxlistitem.min.js',
        'asset/js/jquery.easing.min.js',
        'asset/js/scrollup.min.js',
        'asset/js/jquery.waypoints.min.js',
        'asset/js/waypoints-sticky.min.js',
        'asset/js/pace.min.js',
        'asset/js/slick.min.js',
        'asset/js/scripts.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
