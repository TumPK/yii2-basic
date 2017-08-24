<?php
$this->title = 'การจัดการ';
$this->params['breadcrumbs'][] = $this->title;

$baseUrl = \Yii::getAlias('@web');


?>

<form action="" method="get">
	<input name="search" type="text" value="<?php echo $input; ?>">
	<input type="submit" value="ค้นหา">
</form>

<a href="<?=$baseUrl."/course/create" ?>"><button>สร้าง</button></a>

<table border="1">
  <tr>
    <th>#id</th>
    <th>CourseId</th>
    <th>CourseName</th>
    <th>Description</th>
    <th>LecurerId</th>
    <th></th>
    <th></th>
  </tr>
  
  <?php 
//   	foreach ($result as $var){
//   		echo "<tr>";
//   			echo "<td>".$var['_id']."</td>";
//   			echo "<td width=\"100px\">".$var['course_id']."</td>";
// 			echo "<td>".$var['name']."</td>";
// 			echo "<td>".$var['description']."</td>";
// 			echo "<td>".$var['lecturer_id']."</td>";
//   		echo "</tr>";
//   	}
  	
  	?>
  	
  	<?php foreach ($result as $var){ ?>
  		<tr>
  			<td width="100px"><?=$var['_id'] ?></td>
  			<td><?=$var['course_id'] ?></td>
  			<td><?=$var['name'] ?></td>
  			<td><?=$var['description'] ?></td>
  			<td><?=$var['lecturer_id'] ?></td>
  			<td><a href="<?=$baseUrl."/course/edit?id=".$var['_id']?>">แก้ไข</a></td>
  			<td><a href="<?=$baseUrl."/course/delete?id=".$var['_id']?>">ลบ</a></td>
  		</tr>
  	<?php } ?>
</table>
