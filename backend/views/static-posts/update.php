<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StaticPosts */

$this->title = 'Обновление: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Static Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="static-posts-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
