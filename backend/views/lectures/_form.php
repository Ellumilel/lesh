<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use \yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Lectures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lectures-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'imageUpload' => Url::to(['/site/image-upload']),
            'imageManagerJson' => Url::to(['/site/images-get']),
            'fileManagerJson' => Url::to(['/site/files-get']),
            'fileUpload' => Url::to(['/site/file-upload']),
            'plugins' => [
                'table',
                'fontsize',
                'fontcolor',
                'imagemanager',
                'limiter',
                'video',
                'fullscreen',
                'filemanager'
            ],
        ]
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создание' : 'Обновление', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
