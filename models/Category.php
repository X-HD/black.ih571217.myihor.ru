<?php

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord{
    
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    
    //С какой таблицей будет связана наша модель с таблицей Катерогия
    public static function tableName(){
        return 'category';
    }
    
    public function getProducts(){
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}


?>