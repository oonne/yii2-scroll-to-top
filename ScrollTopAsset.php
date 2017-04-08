<?php
/**
 * @link      https://github.com/oonne/yii2-scroll-to-top
 * @copyright Copyright (c) JAY
 */

namespace oonne\scrollTop;

use yii\web\AssetBundle;

/**
 * scroll-to-top widget to include in a website
 *
 * @author JAY
 */
class ScrollTopAsset extends AssetBundle
{
    public $sourcePath = '@oonne/scrollTop/assets';
    public $css = [
        'css/scroll-top.css',
    ];
    public $js = [
        'js/scroll-top.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
