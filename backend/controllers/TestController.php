<?php

namespace backend\controllers;

use Yii;
use backend\models\Lecturer;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Course;


/**
 * LecturerController implements the CRUD actions for Lecturer model.
 */
class TestController extends Controller
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
     * Lists all Lecturer models.
     * @return mixed
     */
    public function actionIndex()
    {    
    	$request = Yii::$app->request;
    	$search = $request->get('name',null);
    	
    	$query = Lecturer::find();
    	if($search != null){
    		$query->where(["name"=>$search]);
    	}
    	$model = $query->all();
    	
        return $this->render('index', [
    		'name' => $search,
        	'model' => $model
        	
        ]);
    }
    
    public function actionCreate(){
    	
    	return $this->render('create', [
    			 
    	]);
    }

    
}
