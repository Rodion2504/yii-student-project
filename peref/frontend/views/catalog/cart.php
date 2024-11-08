<?php

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Корзина';
?>
<head>
    <script>
    public function actionDelete(){
        $session = Yii::$app->session;
        $session->destroy();
    }
    </script>
</head>
<h1><?= Html::encode($this->title) ?></h1>
<?php if(count($producti) == 0):?>
            <p>В корзине нет товаров</p>
        </div>
    <?php else: $sum = 0?>
<div class="cart_inner">  
          <table class="table">
<?php foreach($producti as $value):?>
    <div class="table-responsive">
              <tbody>
              <tr>
                  
                  <div class="media">
                          <div class="d-flex">
                          <td>
                          <p><?php echo $value['id'];?></p>
                          <td>
                          <td>
                          <img src="<?php echo $value['image'];?>" alt="" width="300" height="333">
                          </td>
                          <td>
                              <p><?php echo $value['name'];?></p>
                        </td>
                          </div>
                      </div>
                  </td>
          
                  <td class="rez_price_cart"><?php
                    $sum += $value['price'] * $value['count_cart'];
                    echo $value['price'] * $value['count_cart'];?> руб</td>
                </tr>
            <div class="product_btn">
            </div>
                </div>
<?php endforeach;?>
<tr class="cart_prod_footer">
            <td colspan="2" class="null_cart"></td>
            <td colspan="2" class="rez_title_cart">Итого, к оплате:</td>
            <td class="rez_price_cart"><?php echo $sum;?> руб</td>
        </tr>
                </table>  
</div> 
<div class="col-lg-12 btn_cart_wrap">
    <a href="index.php?r=catalog" class="btn btn-success"><i class="glyphicon glyphicon-chevron-left"></i>Продолжить покупки</a>
</div>
<?php endif;?>
