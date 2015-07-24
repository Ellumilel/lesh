<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\StaticPosts */

$this->title = 'Create Static Posts';
$this->params['breadcrumbs'][] = ['label' => 'Static Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-posts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
