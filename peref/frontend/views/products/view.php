<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Products $model */

$this->title = $producti->name;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php if($producti['price_old']==! ""):?>
                <span>-<?php echo 100-intval($producti['price']*100/$producti['price_old']);?>%</span>
            <?php endif;?>
    <img src="<?= $producti['image'];?>" alt="" width="300" height="333" >
    <div class="product_price">
            
            <span class="card-product__price"><?= $producti['price']?> руб</span>
            <?php if($producti['price_old']==! ""):?>
                <span class="card-product__price"><s><?= $producti['price_old']?> руб</s></span>
            <?php endif;?>
            <div class="product_btn">
            
        </div>
        </div>
    <?= DetailView::widget([
        'model' => $producti,
        'attributes' => [
            'id',
            //'name',
            'brand',
            'type',
            'color',
            'guarantee',
            'country_manufacturer',
            //'image',
            'description:ntext',
            //'price',
            //'price_old',
        ],
    ]) ?>

</div>
