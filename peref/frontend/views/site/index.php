<?php

/** @var yii\web\View $this */

$this->title = 'Интернет-магазин периферии для компьютеров';
?>
<div class="site-index">
    <section class="hero-banner">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/home/hero-banner.png" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h1>Осмотритесь и выберите для вас продукт</h1>
              <a class="button button-hero" href="index.php?r=catalog">Просмотреть сейчас</a>
            </div>
          </div>
        </div>
      </div>
    </section>
<h1 align="center">Таблицы</h1>
    <section class="section-margin mt-0">
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel__slide">
          <img src="img/home/monitor.jpeg" alt="" class="img-fluid">
          <a href="index.php?r=videoperef" class="hero-carousel__slideOverlay">
            <h3>Видео периферия</h3>
            
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/hero-slide2.png" alt="" class="img-fluid">
          <a href="index.php?r=audioperef" class="hero-carousel__slideOverlay">
            <h3>Аудио периферия</h3>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/mouse.png" alt="" class="img-fluid">
          <a href="index.php?r=otherperef" class="hero-carousel__slideOverlay">
            <h3>Другая периферия</h3>
        
          </a>
        </div>
      </div>
    </section>
</div>
