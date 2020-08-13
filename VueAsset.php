<?php
/**
 * @link 
 * @copyright Copyright (c) 2008 CoLee Software LLC
 * @license MIT
 */

namespace colee\vue;

use yii\web\AssetBundle;

/**
 * @author CoLee
 */
class VueAsset extends AssetBundle
{


    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $css = [
        
    ];
    public $js = [
        
    ];
    public $depends = [
        
    ];
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets/';
        $this->js[] = YII_ENV_DEV ? 'vue/dist/vue.js' : 'vue/dist/vue.min.js';
    }
}
