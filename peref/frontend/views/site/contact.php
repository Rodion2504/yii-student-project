<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';

?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <p class="sm-head">
									
									Адрес
								</p>
								<p>Ангарск, улица Комсомольская, 25</p>
	
								<p class="sm-head">
									
									Телефон
								</p>
								<p>
									+7(954)740-15-52  
								</p>
	
								<p class="sm-head">
									
									Почта
								</p>
								<p>
									free@infoexample.com <br>
									www.infoexample.com
								</p>
                <table>
  <tr>
    <th>Должность</th>
    <th>Номер телефона</th>
    <th>ФИО</th>
  </tr>
  <tr>
    <td>Директор</td>
    <td>60-91-65</td>
    <td>Тихонов Демид Маркович</td>
  </tr>
  <tr>
    <td>Секретарь директора</td>
    <td>57-46-37</td>
    <td>Романова Амина Михайловна</td>
  </tr>
  <tr>
    <td>Заместитель директора</td>
    <td>05-66-66</td>
    <td>Давыдова Алиса Андреевна</td>
  </tr>
  <tr>
    <td>Главный бухгалтер</td>
    <td>53-19-94</td>
    <td>Демидова Арина Артуровна</td>
  </tr>
  <tr>
    <td>Специалист по охране труда</td>
    <td>73-03-97</td>
    <td>Смирнов Георгий Павлович</td>
  </tr>
  <tr>
    <td>Факс</td>
    <td>78-70-96</td>
    <td>Лапшин Марк Иванович</td>
  </tr>
</table>
                                <section class="section-margin--small">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 420px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div>

    <!--<p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>-->
