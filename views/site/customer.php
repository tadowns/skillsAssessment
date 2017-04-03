<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
//use yii\jui\DatePicker;

$this->title = 'Customer';

?>
<div class="row">
    <div class="col-lg-5">
      <?= Html::a('Back', ['customers'], ['class' => 'btn btn-primary btn-sm']) ?>
      <br>
      Customer id: <?= $model->id ?>
        <?php $form = ActiveForm::begin(['action' => ['site/postcustomer', 'id'=>$model->id],'options' => ['id' => 'customer']]); ?>
            <?= $form->field($model, 'id')->hiddenInput(['value' => $model->id])->label(false);  ?>
            <?= $form->field($model, 'country_of_citizenship')->textInput(['value' => $model->country_of_citizenship])  ?>
            <?= $form->field($model, 'primary_country_destination')->textInput(['value' => $model->primary_country_destination]) ?>
            <?= $form->field($model, 'primary_state_destination')->textInput(['value' => $model->primary_state_destination]) ?>
            <?= $form->field($model, 'date_of_birth')->widget(\yii\jui\DatePicker::className(),['clientOptions' => ['dateFormat' => 'yy-mm-dd']]) ?>
            <?= $form->field($model, 'start_travel_date')->widget(\yii\jui\DatePicker::classname()) ?>
            <?= $form->field($model, 'end_travel_date')->widget(\yii\jui\DatePicker::classname()) ?>
            <?= $form->field($model, 'status')->dropDownList(['Student', 'OPT/Scholar', 'Traveler'],
                                                            ['prompt'=>'Status']);(['value' => $model->status]) ?>
            <?= $form->field($model, 'dependent')->checkbox(['selected' => $model->dependent, 'uncheck' => '0', 'checked' => '1']) ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
