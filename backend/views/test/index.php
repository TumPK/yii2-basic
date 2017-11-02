<?php
$this->title = 'การจัดการ';
$this->params['breadcrumbs'][] = $this->title;

$baseUrl = \Yii::getAlias('@web');

echo $baseUrl;
?>

<form action="" method="">
	<input type="text" name="name" value="<?=$name?>">
	<input type="submit" value="ค้นหา">
</form>

<a href="<?=$baseUrl."/test/create" ?>"><button>สร้าง</button></a>

<table border="1">
	<tr>
		<th>#</th>
		<th>name</th>
		<th>email</th>
	</tr>
	<?php foreach ($model as $value){ ?>
	<tr>
		<td><?=$value["_id"] ?></td>
		<td><?=$value["name"] ?></td>
		<td><?=$value["email"] ?></td>
	</tr>
	<?php } ?>
</table>