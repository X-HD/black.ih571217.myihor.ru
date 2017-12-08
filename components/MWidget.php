<?php
namespace app\components;
use yii\base\Widget;
use app\models\Category;
use Yii;

//наследуюем extends
class MWidget extends Widget{
    
    //Обьявляем переменную
    public $tmp;
    //Храним все записи категории которые храняться в бд(массив)
    public $data;
    public $model;
    //здесь строим дерево из массива
    public $tree;
    //Готовый Html Код будет храниться 
    public $menuHtml;
    
    public function init()
    {
        parent::init();
        
        //если данный параметр не передан то по умолчанию будет menu
        if ($this -> tmp === null)
        {
    
            $this->tmp = 'menu';
            
        }
        //расширение 
            $this->tmp .='.php';
    }
    
    public function run(){
        
        if($this->tmp == 'menu.php'){
        //получаем данные из Кэша
        $menu = Yii::$app->cache->get('menu');
        
        //если мы получили что-то из кэша то возращаем меню
        if($menu) return $menu;
        }
        
        //если нечего не получили то формируем данные
        
        // делаем запрос и выводм массива из бд
        $this->data = Category::find()->indexBy('id')->asArray()->all();
        //здесь храним наше дерево, возращаемое методом gettree(строим дерево)
        $this->tree = $this->getTree();
       
        
        //передаем наша дерево()и строим из него Html код
        $this->menuHtml = $this->getMenuHtml($this->tree);
        
        if($this->tmp == 'menu.php'){
        /*запись в кєш (передаем туда ключь который создаем файл кеша 
        и данные которые хотим записать это )
        menuHtml и время на сколько мы хочем записать*/
        Yii::$app->cache->set('menu', $this->menuHtml, 10);
        }
        return $this->menuHtml;
    }
    
    //метод проходиться в цыкли по массиву и строит дерево
    protected function getTree(){
        
        $tree = [];
        
        foreach ($this->data as $id=>&$node)
        {
            if(!$node['parent_id'])
            $tree[$id] = &$node;
            else
            $this->data[$node['parent_id']] ['childs'] [$node['id']] = &$node;
        }
        
        return $tree;
    }
    
    //принимает параметр $tree
    protected function getMenuHtml($tree, $tab = ''){
        
        //сюда помещаем наш Html
        $str = '';
        
        //проходимся циклам по дереву
        foreach($tree as $category){
            
            //вызываем и передаем в catToTemplate каждый эелемент дерева
            $str .= $this->catToTemplate($category,$tab);
            }
            //возращаем
            return $str;
        }
    
    //catToTemplate принимает параметр  элемент и помещает его в шаблон
    protected function catToTemplate($category,$tab){
        //буферезация 
        ob_start();
        include __DIR__ . '/menu_tmp/' . $this->tmp;
        
        return ob_get_clean();
    }
    
}
?>