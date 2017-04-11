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
     * @var HTML the tag content for the scroll-to-top button
     */
    public $tagContent = 'TOP';

    /**
     * @var CSS the class name for the scroll-to-top button
     */
    public $options = 'oonne-scroll-top';

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
        return Html::tag('div', $this->tagContent, ['id'=>'scroll-to-top', 'class'=>$this->options]);
    }
}