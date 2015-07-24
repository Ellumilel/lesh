<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Публикации';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создание публикации', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text:ntext',
            //'created_at',
            //'updated_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
