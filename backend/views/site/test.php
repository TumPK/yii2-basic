<?php
use backend\models\Course;
use yii\web\View;

$csrf = Yii::$app->request->csrfToken;
$csrfParam = Yii::$app->request->csrfParam;
$baseUrl = \Yii::getAlias('@web');
$str2 = <<<EOT

$(document).ready(function(){

	$('#click').click(function(){
	
		$.ajax({
			url: '$baseUrl/site/send',
			type: 'post',
			data: {
				'$csrfParam' : '$csrf'
			},	
			dataType: "json",
			success: function (data) {
				console.log(data);
			}	
		});
						
	});
						
	$('#post').click(function(){
		$.post( '$baseUrl/site/send', function( data ) {
		  	var course  = data.data;
			tBody(course);
		});			
	});
				
	function head(){
		var head = "<tr>"+
			"<th>id</th>"+
			"<th>course_id</th>"+
			"<th>name</th>"+
			"<th>description</th>"+
		"</tr>";
				
		return head;			
	}
				
	function tBody(data){
		var strTable = head();

		$('#list').html(strTable);
	}
						
});

EOT;
$this->registerJs($str2, View::POS_END);
?>

<button id="click">click</button>
<button id="post">Ajax Post</button>

<table class="table" id="list"></table>