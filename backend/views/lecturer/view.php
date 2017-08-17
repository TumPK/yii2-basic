<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Lecturer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Lecturers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lecturer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => (string)$model->_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => (string)$model->_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            '_id',
            'name',
            'dob',
            'gender',
            'degree',
            'address',
            'email',
            'phone_number',
        ],
    ]) ?>

</div>
