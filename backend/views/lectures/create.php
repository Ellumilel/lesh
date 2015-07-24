<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Lectures */

$this->title = 'Создание лекции';
$this->params['breadcrumbs'][] = ['label' => 'Лекции', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lectures-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
