<?php

/*
 * Yii 2 asset for bower LightBox2
 *
 * @link      https://github.com/tsanchev/yii2-lightbox2
 * @package   yii2-asset-lightbox2
 * @license   BSD-3-Clause
 */

namespace tsanchev\colorselector;

class ColorSelectorAsset extends \yii\web\AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/bootstrap-colorselector/lib/bootstrap-colorselector-0.2.0/';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/bootstrap-colorselector.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $css = [
        'css/bootstrap-colorselector.css',
    ];
}
