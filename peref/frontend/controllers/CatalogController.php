<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Response;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Brands;
use frontend\models\Products;
use frontend\models\Cart;
use frontend\models\User;
use yii\web\NotAcceptableHttpException;

class CatalogController extends Controller {
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'signup','index'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout','index','cart'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
            'captcha' => [
                'class' => \yii\captcha\CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        
        $products=Products::find()->asArray()->all();
        return $this->render('index',compact('products'));
    }

    public function actionCart()
    {
        $session = Yii::$app->session;
        //$session->destroy();
        $session->open();


        if($session->has('productsSession')){
            $productsSession = $session->get('productsSession');
        }
        else{
            $productsSession = array();
        }

        if(isset($_GET['id']) && !empty($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
            $productsArray = Products::find()->where(['id' => $_GET['id']])->asArray()->one();

            if(is_array($productsArray) && count($productsArray) > 0){

                $flag = false;
                for($i = 0; $i < count($productsSession); $i++){
                    if($productsSession[$i]['id'] == $_GET['id']){
                        $flag = true;
                        if($productsArray['counts'] >= $productsSession[$i]['count'] + 1){

                            $productsSession[$i]['count']++;
                        }
                        break;
                    }
                }
                if(!$flag){
                    array_push($productsSession, ['id' => $_GET['id'], 'count' => 1 ]);
                }
            }
        }

        $session->set('productsSession', $productsSession);
        $productsSession = $session->get('productsSession');

        $arrayID = array();

        foreach($productsSession as $value){
            array_push($arrayID, $value['id']);
        }

        $producti = Products::find()->where(['id' => $arrayID])->asArray()->All();

        foreach($producti as $key => $value){
            $producti[$key]['count_cart'] = $productsSession[$key]['count'];
        }

        return $this->render('cart', compact('producti'));
    }

}
 