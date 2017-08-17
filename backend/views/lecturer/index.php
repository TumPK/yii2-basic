<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hello';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lecturer-index">
	
	<h1><?=$hello?></h1>
	<?php //var_dump($model) ?>
	<?php 
	echo $model['name'];
	echo $model['_id'];
	
	?>
    
</div>
