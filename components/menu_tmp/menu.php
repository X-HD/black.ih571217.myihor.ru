<li>
    <!--ссылки делаю -->
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']])?>">
        <?= $category['name']?>
            <!--Если существует поток мы добавляем плюс внутри нашей ссылки-->
            <?php if(isset($category['childs']) ): ?>
            <?php endif;?>
    </a>
    <!--если существуют потомки тогда мы делаем вложенный список-->
    <?php if(isset($category['childs']) ): ?>
    <!--вызываем рекурсивно getMenuHtml но передаем ему только потомков childs-->
    <ul>
        <?= $this->getMenuHtml($category['childs'])?>
    </ul>
    <?php endif;?>
</li>
