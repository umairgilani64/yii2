<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use common\assets\Html5shiv;
use rmrevin\yii\fontawesome\NpmFreeAssetBundle;
use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Frontend application asset
 */
class FrontendAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@frontend/web/bundle';

    /**
     * @var array
     */
    public $css = [
        'yii2/frontend/web/css/custom.css',

        
    ];

    /**
     * @var array
     */
    public $js = [
        '/js/app.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        Html5shiv::class,
        NpmFreeAssetBundle::class,
    ];
}
