<?php

use yii\helpers\Html;

$this->title='ثبت فاکتور خرید';
/* @var $this yii\web\View */
/* @var $model amintado\pinventory\models\Factor */

//$this->title = 'Create Factor';
//$this->params['breadcrumbs'][] = ['label' => 'Factors', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factor-create">

    <?= $this->render('_form', [
        'model' => $model,
        'mode'=>'create'
    ]) ?>

</div>
