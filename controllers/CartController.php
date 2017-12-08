<?php

namespace app\controllers;
use app\models\Product;
use app\models\Cart;
use app\models\Order;
use app\models\OrderItems;





use Yii;


class CartController extends appController{
    
    public function actionAdd()
    {
        
        //получаем данные из массива get
        $id = Yii::$app->request->get('id');
        
        
        $product = Product::findOne($id);
        if(empty($product)) return false;
        
        
        
        $session = Yii::$app->session;
        //открываем ссесию
        $session->open();
        
        //создаем обьект нашей модели
        $cart = new Cart();
        
        //вызываем наш метод и передаем ему наш обьект продукт с информацией о товаре
        $cart->addCart($product);
        //debug($session['cart']);
       
      $this->layout = false;
        return $this->render('cartm', compact('session'));
        
        /*debug($session['cart']);
        debug($session['cart.qty']);
        debug($session['cart.sum']);*/
        
    }
    
    //очистка корзины
    public function actionClear()
    {
    
         $session = Yii::$app->session;
         
        //открываем ссесию
        $session->open();
        
        //удаляем все товары из корзыны 
        $session->remove('cart');
        //удаляем кол-во отдельно 
        $session->remove('cart.qty');
        //удаляем сумму отдельно
        $session->remove('cart.sum');
        
        $this->layout = false;
        return $this->render('cartm', compact('session'));
        
    }
    //удаление по крестику
    public function actionDelItem(){
        
         //получаем данные из массива get
        $id = Yii::$app->request->get('id');
        
         $session = Yii::$app->session;
        //открываем ссесию
        $session->open();
        
        //получение обьекта корзины
        $cart = new Cart();
        
        //пересчет
        $cart->recalc($id);
        
        $this->layout = false;
        return $this->render('cartm', compact('session'));
        
    }
    
   public function actionShow()
    {
         $session = Yii::$app->session;
        //открываем ссесию
        $session->open();
        
        $this->layout = false;
        return $this->render('cartm', compact('session'));
    }
    
    public function actionView()
    {
        $session = Yii::$app->session;
        
        //открываем ссесию
        $session->open();
        
        //создаем модель заказа
        $order = new Order();
        
        //заполняем и сохраняем
        if($order->load(Yii::$app->request->post()) )
        {
           $order->qty = $session['cart.qty'];
           $order->sum = $session['cart.sum'];
           
           if($order->save()){
            
            //вызываем  метом передаем карзину и ордер и его свойства id
            $this->saveOrderItems($session['cart'], $order->id);
            
            Yii::$app->session->setFlash('success', 'Your order is accepted!');
            
            //передаем вид и корзину 
            Yii::$app->mailer->compose('order', ['session' => $session])
            ->setFrom(['bstallion1@mail.ru' => 'BLACKSTALLION'])
            ->setTo($order->email)
            ->setSubject('Заказ')
            //отправка
            ->send();
            
            
            //очистка корзины
            $session->remove('cart');
            $session->remove('cart.qty');
            $session->remove('cart.sum');
            
            //перезагружаем страницу
            return $this->refresh();
           }else{
             Yii::$app->session->setFlash('error', 'Order error!');
           }
        }
        
        //передаем в вид  корзину и обьект модели ордер
        
        return $this->render('view', compact('session', 'order'));
    }
    
    //принимает нашу корзину и айди сохраненного заказа
    protected function saveOrderItems($items, $order_id){
        
        //проходимся циклом по корзине получаем айди и весь заказ
        foreach($items as $id => $item){
            
            //создаем обьект модели
            $order_items = new OrderItems();
            $order_items->order_id = $order_id;
            $order_items->product_id = $id;
            $order_items->name = $item['name'];
            $order_items->price = $item['price'];
            $order_items->qty_item = $item['qty'];
            $order_items->sum_item = $item['qty'] * $item['price'];
            $order_items->save();
        }
    }
    
    
    
}