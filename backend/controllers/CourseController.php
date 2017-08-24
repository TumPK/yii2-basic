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
class CourseController extends Controller
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
    	$search = $request->get('search',null);
    	
    	//db.course.find({"course_id":"value"});
//     	$query = Course::findAll(["course_id" => $search]); 
    	
    	//db.course.find();
    	//db.course.find({"course_id":"value"});
    	$query = Course::find();
    	if($search != null){
    		$query->where(["course_id" => $search]);
    	}
    	$result = $query->all();
    	
    	echo $search;
       
        return $this->render('index', [
       		'input' => $search,
        	'result' => $result
        	
        ]);
    }

    
}
