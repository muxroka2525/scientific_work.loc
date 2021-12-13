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
        "css/bootstrap.css",
        "css/bootstrap-responsive.css",
        "css/custom-styles.css",
        "css/font-awesome.css",
        "css/component.css",
        "css/font-awesome-ie7.css",
    ];
    public $js = [
        "js/modernizr.custom.js",
        "js/modernizr-2.6.2-respond-1.1.0.min.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
