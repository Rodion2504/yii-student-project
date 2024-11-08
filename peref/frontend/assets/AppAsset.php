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
        'css/site.css',
        'css/style.css',
        'css/all.min.css',
        'css/themify-icons.css',
        'css/nice-select.css',
        'css/owl.theme.default.min.css',
        'css/owl.carousel.min.css',
        'css/bootstrap.min.css'
    ];
    public $js = [
        'js/jquery-3.2.1.min.js',
        'js/bootstrap.bundle.min.js',
        'js/skrollr.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.nice-select.min.js',
        'js/jquery.ajaxchimp.min.js',
        'js/mail-script.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
