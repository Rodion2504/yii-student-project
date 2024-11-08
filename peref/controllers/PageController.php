<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\ContactForm;

/**
 * Контроллер для страниц сайта
 */
class PageController extends Controller
{

    /**
    *
    */
    public function actionListproduct()
    {
        return $this->render('listproducts');
    }

}
