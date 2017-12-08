<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;

use Yii;

class ProductController extends appController{
    
    
      public function actionView()
    {
        //получаем id товара
        $id = Yii::$app->request->get('id');
        //линивая загрузка
        $product = Product::findOne($id);
        //обращаемся к модели подукт( и указываем где поля популярные равняеться 1 то выводим на сайт)
        $hits = Product::find()->where(['hit' => 1])->limit(6)->all();
        $news = Product::find()->where(['new' => 1])->limit(6)->all();
        return $this->render('viewproduct', compact('product','hits','news'));
    }
}


?>