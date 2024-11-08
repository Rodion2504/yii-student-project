<?php
/*
 */
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\models\Brands;
use frontend\models\Products;
use frontend\components\CartWidget;

$this->title = 'Магазин';
?>
<head>
    <style>
        .columns-3 {
  column-count: 3;
}
    </style>
</head>    
<h1><?= Html::encode($this->title) ?></h1>
<article class="columns-3">
<?php
foreach($products as $producti):?>
<div class="col-md-12 col-lg-12">
    <div class="card text-center card-product">
            <?php if($producti['price_old']==! ""):?>
                <span>-<?php echo 100-intval($producti['price']*100/$producti['price_old']);?>%</span>
            <?php endif;?>
            <img class="card-img" src="<?= $producti['image'];?>" alt="" >
        </a>
        <div class="card-body">
        
        <h4 class="card-product__title"><a href="<?= Url::toRoute(['products/view','id'=> $producti['id']]);?>" class="product_title"><?= $producti['name'];?></a></h4>
        <div class="product_price">
            
            <span class="card-product__price"><?= $producti['price']?> руб</span>
            <?php if($producti['price_old']==! ""):?>
                <span class="card-product__price"><s><?= $producti['price_old']?> руб</s></span>
            <?php endif;?>
            
        </div>
        </div>
        <div class="product_btn">
            <!--Кнопка корзины-->
            <a href="<?=Url::toRoute(['catalog/cart', 'id' => $producti['id']]);?>" class="btn btn-success">В корзину</a>
        </div>
    </div>
</div>    
<?php endforeach;?> 
 