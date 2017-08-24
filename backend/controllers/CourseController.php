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
    
    public function actionCreate(){
    	
    	return $this->render('create',[
    			
    	]);
    }
    
    public function actionSave(){
    	$request = Yii::$app->request;
    	$id = $request->get('id',null);
    	$course_id = $request->get('course_id',null);
    	$course_name = $request->get('course_name',null);
    	$description = $request->get('description',null);
    	
    	$baseUrl = \Yii::getAlias('@web');
    	
    	$model;
    	if($id == null){
    		//create
    		$model = new Course();
    	}else{
    		//update
    		$model = Course::findOne($id);
    	}
    	
    	$model->course_id = $course_id;
    	$model->name = $course_name;
    	$model->description = $description;
    	if($model->save()){
    		echo "success";
    	}else{
    		echo "unsuccess";
    	}
    	
    	return $this->redirect($baseUrl."/course/index");
    }
    
    public function actionDelete(){
    	$request = Yii::$app->request;
    	$id = $request->get('id',null);
    	$baseUrl = \Yii::getAlias('@web');
    	
    	$model = Course::findOne($id);
    	$model->delete();
    	
    	return $this->redirect($baseUrl."/course/index");
    }
    
    public function actionEdit(){
    	$request = Yii::$app->request;
    	$id = $request->get('id',null);
    	
    	$model = Course::findOne($id);
    	return $this->render('edit',[
    		'model' => $model	 
    	]);
    }

    
}
