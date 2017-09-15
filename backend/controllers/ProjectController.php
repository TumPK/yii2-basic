<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Lecturer;
use yii\helpers\ArrayHelper;

/**
 * Site controller
 */
class ProjectController extends Controller
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
    	$this->layout = "@backend/themes/adminlte/layouts/index";
    	$request = \Yii::$app->request;
    	$lecturerId = $request->get('lecturer', null);
    	
    	$lecturerModel = new Lecturer();
    	$listLecturer = Lecturer::find()->all();
    	$arrLecturer = ArrayHelper::map($listLecturer,function ($lecturerModel){return  (string)$lecturerModel->_id;},'name');
        return $this->render('index',[
        		"arrLecturer" => $arrLecturer,
        		"lecturerId" => $lecturerId
        ]);
    }

}
