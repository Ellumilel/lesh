<?php
namespace backend\controllers;

use vova07\imperavi\actions\GetAction;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'roles' => ['?'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [
                            'index',
                            'logout',
                            'image-upload',
                            'images-get',
                            'files-get',
                            'file-upload',
                        ],
                        'allow' => true,
                        'roles' => ['admin','superadmin'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'image-upload' => [
                'class' => 'vova07\imperavi\actions\UploadAction',
                'url' => '/backend/web/images/', // Directory URL address, where files are stored.
                'path' => '@backend/web/images/', // Or absolute path to directory where files are stored.
                //'options' => ['basePath' => Yii::getAlias('@backend/web/images')],
            ],
            'images-get' => [
                'class' => 'vova07\imperavi\actions\GetAction',
                'url' => '@backend/web/images/', // Directory URL address, where files are stored.
                'path' => '@backend/web/images/', // Or absolute path to directory where files are stored.
                'options' => ['basePath' => Yii::getAlias('@backend/web/images')],
                'type' => GetAction::TYPE_IMAGES,
            ],
            'files-get' => [
                'class' => 'vova07\imperavi\actions\GetAction',
                'url' => '/files/', // Directory URL address, where files are stored.
                'path' => '@web/files/', // Or absolute path to directory where files are stored.
                'type' => GetAction::TYPE_FILES,//GetAction::TYPE_FILES,
            ],
            'file-upload' => [
                'class' => 'vova07\imperavi\actions\UploadAction',
                'url' => '/files/', // Directory URL address, where files are stored.
                'path' => '@web/files/' // Or absolute path to directory where files are stored.
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
