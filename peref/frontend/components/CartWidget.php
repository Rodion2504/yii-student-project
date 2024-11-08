<?php
namespace frontend\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Url;
class CartWidget extends Widget
{
    public $count;
    function __construct(){
        $session = Yii::$app->session;
        $session->open();
        if($session->has('productsSession')){
            $productsSession = $session->get('productsSession');
        }
        if(isset($productsSession) &&
        is_array($productsSession)
        && count($productsSession) > 0){
        $this->count = count($productsSession);
    }
        else{
        $this->count = 0;
        }

    }

    public function run(){
        echo '<li class="nav-item">
        <button>
        <a href="'.Url::toRoute('catalog/cart').'">
        <img src="img/cartshop.jpg" width="20" height="22"> 
        <span class="nav-shop__circle">'.$this->count.'</a></button></li>';
        
    }


}