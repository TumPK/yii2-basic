<?php

$this->title = 'Create Course';
$this->params['breadcrumbs'][] = ['label' => 'การจัดการ', 'url' => ['index']]; //controller/index
$this->params['breadcrumbs'][] = $this->title;

$baseUrl = \Yii::getAlias('@web');
?>

<form action="<?=$baseUrl."/course/save" ?>" method="get">
	รหัสรายวิชา <input type="text" name="course_id">
	ชื่อรายวิชา <input type="text" name="course_name">
	คำอธิบาย <input type="text" name="description">
	<input type="submit" value="บันทึก">
</form>