<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Course;

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
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
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

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
    public function actionTest()
    {
    	return $this->render('test', []);
    }
    
    public function beforeAction($action)
    {
    	if ($action->id == 'my-method') {
    		$this->enableCsrfValidation = false;
    	}
    
    	return parent::beforeAction($action);
    }
    
    public function actionSend(){
    	if (Yii::$app->request->isAjax) {
    		$data = Yii::$app->request->post();
    	
    		$search = Course::find()->all();
    		
    		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    		return [
    				'data' => $search
    		];
    	}
    }
}
