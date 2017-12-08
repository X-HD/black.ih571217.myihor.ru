<?php

namespace app\controllers;


use app\models\Category;
use app\models\Product;


use Yii;
use yii\data\Pagination;

class CategoryController extends appController{
    
    public function actionIndex(){
        
        //обращаемся к модели подукт( и указываем где поля популярные равняеться 1 то выводим на сайт)
       $hits = Product::find()->where(['hit' => 1])->limit(15)->all();
      
       // передаем compact('hits') что бы он был доступен в шаблоне
        return $this->render('index', compact('hits'));
        
        
        
    }
    
     public function actionView($id)
    {
       
    //получаем id 
    //$id = Yii::$app->request->get('id');
  
    //получаем все данные продукта из бд
     //$products = Product::find()->where(['category_id' => $id])->all();
     
     
     //делаем запрос дляя получение данных из бд
       $query = $products = Product::find()->where(['category_id' => $id]);
       
       //создаем обьект класса Pagination и передаем общие кол-во записй которое будет вытащено запросам
       $pages = new Pagination(['totalCount' => $query->count(), 'pageSize'=> 12, 'forcePageParam' => false,
       'pageSizeParam' => false ]);
    
       /*делаем запрос(указываем параметры, offset( с какой записи начитать выборку) limit(сколько
       записей взять))*/
       $products = $query->offset($pages->offset)->limit($pages->limit)->all();
       
    
    return $this->render('viewcategory', compact('products', 'pages'));
    
    
    }
    
     public function actionSearch(){
        $q = trim(Yii::$app->request->get('q'));
        //if(!$q)
            //return $this->render('search');
        $query = Product::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 12, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q'));
    }
}

?>