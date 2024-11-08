<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
<div class="main_menu">
      <nav id="w0" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php?r=site%2Findex"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.php?r=site%2Findex">Главная</a></li>
              <li class="nav-item active"><a class="nav-link" href="index.php?r=site%2Fabout">О нас</a></li>
              <li class="nav-item active"><a class="nav-link" href="index.php?r=site%2Fcontact">Контакты</a></li>
              <li class="nav-item active"><a class="nav-link" href="index.php?r=personal">Сотрудники</a></li>
              <li class="nav-item active"><a class="nav-link" href="index.php?r=catalog">Магазин</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Таблицы</a>
                <ul class="dropdown-menu">
                  <li class="nav-item active"><a class="nav-link" href="index.php?r=videoperef">Видео периферия</a></li>
                  <li class="nav-item active"><a class="nav-link" href="index.php?r=audioperef">Аудио периферия</a></li>
                  <li class="nav-item active"><a class="nav-link" href="index.php?r=otherperef">Другая периферия</a></li>
                  
                </ul>
							</li>
          
							</li>
                
                  <?php 
                  $menuItems = [
                    
                  ];
                  if (Yii::$app->user->isGuest) {
                    $menuItems[] = ['label' => 'Зарегистрироваться', 'url' => ['/site/signup']];
                }
                  echo Nav::widget([
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
        'items' => $menuItems
        
    ]);
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Войти',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm();
          }?>
     <ul class="nav-shop">
              <!--Вывод корзины-->
              <?php echo \frontend\components\CartWidget::widget();?>
          </div>
        </div>
      </nav>
    </div>
    <?php
    /*
      NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'О нас', 'url' => ['/site/about']],
        ['label' => 'Контакты', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Зарегистрироваться', 'url' => ['/site/signup']];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
        'items' => $menuItems,
    ]);
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Войти',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm();
    }
    
    NavBar::end();
    */
    ?>
    
</header>
<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<footer class="footer">
<div class="footer-area footer-only">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-footer-widget tp_widgets ">
							<h4 class="footer_title large_title">О нас</h4>
              <p> Компания "Aroma" существует с 1991 года и является одним из ведущих оптовых поставщиков компьютерных комплектующих и периферии на российском рынке. Отдел корпоративных проектов компании реализует другое важное направление деятельности - выполнение заказов в области системной интеграции.</p>
              <p>С 2009 года компания "Aroma" открыла новый проект розничной торговли через интернет магазин.</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							
							<ul class="list">
								<li><a href="index.php?r=site%2Findex">Главная</a></li>
								<li><a href="index.php?r=site%2Fabout">О нас</a></li>
								<li><a href="index.php?r=catalog">Магазин</a></li>
								<li><a href="index.php?r=site%2Fcontact">Контакты</a></li>
							</ul>
						</div>
					</div>
					
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Контакты</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Адрес
								</p>
								<p>Ангарск, улица Комсомольская, 25</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Телефон
								</p>
								<p>
									+7(954)740-15-52  
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Почта
								</p>
								<p>
									free@infoexample.com <br>
									www.infoexample.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
