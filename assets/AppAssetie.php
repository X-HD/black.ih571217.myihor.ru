<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAssetie extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
  
    public $js = [    	
        
        
    'mainsite/js/html5shiv.js',
	'mainsite/js/respond.min.js',
           
    
    ];
    
    public $jsOptions =  [
    
    'condition' => 'lte IE9',
    'position' => \yii\web\View::POS_HEAD
    
    ];
        
    
   
}