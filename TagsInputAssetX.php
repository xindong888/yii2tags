<?php
/**
 * Created by PhpStorm.
 * User: lqj
 * Date: 2017/9/19
 * Time: 下午8:17
 */

namespace yii2tags;


use yii\web\AssetBundle;

class TagsInputAssetX extends AssetBundle
{
    public $sourcePath = '@webroot/vendor/xindong888/yii2tags';

    public $js = [
        'bootstrap-tagsinput.js'
    ];

    public $css = [
        'bootstrap-tagsinput.css',
        'yii2TagsCss.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}