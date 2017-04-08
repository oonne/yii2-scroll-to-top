<?php
/**
 * @link      https://github.com/oonne/yii2-scroll-to-top
 * @copyright Copyright (c) JAY
 */

namespace oonne\scrollTop;

use yii\helpers\Json;
use yii\base\Widget;
use yii\helpers\Html;

/**
 * scroll-to-top widget to include in a website
 *
 * @author JAY
 */
class ScrollTop extends Widget
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $view = $this->getView();
        ScrollTopAsset::register($view);
    }
    /**
     * @inheritdoc
     */
    public function run()
    {
        return Html::a(
                    Html::tag(
                        'i', 
                        '', 
                        ['class'=>'glyphicon glyphicon-menu-up scroll-top-circle']
                    ),
                    '#',
                    ['id'=>'scroll-to-top', 'class'=>'scroll-top']
                );
    }
}