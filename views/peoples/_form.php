<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model amintado\pinventory\models\Peoples */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'StoragePeoplesCategoriesList', 
        'relID' => 'storage-peoples-categories-list', 
        'value' => \yii\helpers\Json::encode($model->storagePeoplesCategoriesLists),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="peoples-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'نام مرکز']) ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => true, 'placeholder' => 'تلفن مرکز']) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'placeholder' => 'آدرس مرکز']) ?>

    <?= $form->field($model, 'economic_code')->textInput(['maxlength' => true, 'placeholder' => 'کد اقتصادی مرکز']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('اتصال مرکز به دسته بندی ها'),
            'content' => $this->render('_formStoragePeoplesCategoriesList', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->storagePeoplesCategoriesLists),
            ]),
        ],
    ];
    echo kartik\tabs\TabsX::widget([
        'items' => $forms,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);
    ?>
    <div class="form-group">
    <?php if(Yii::$app->controller->action->id != 'save-as-new'): ?>
        <?= Html::submitButton($model->isNewRecord ? 'ثبت' : 'بروزرسانی', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    <?php endif; ?>
    <?php if(Yii::$app->controller->action->id != 'index'): ?>
        <?= Html::submitButton('ایجاد یک کپی', ['class' => 'btn btn-info', 'value' => '1', 'name' => '_asnew']) ?>
    <?php endif; ?>
        <?= Html::a('لغو و بستن فرم', '#' , ['class'=> 'btn btn-danger', 'id' => 'cancel']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
