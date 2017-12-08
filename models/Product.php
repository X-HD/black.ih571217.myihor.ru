<?php

namespace app\models;
use yii\db\ActiveRecord;

class Product extends ActiveRecord{
    
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    
    //С какой таблицей будет связана наша модель с таблицей product
    public static function tableName(){
        return 'product';
    }
    
    public function getCategory(){
        
        //1 продукт может иметь одну категорию
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}


?>