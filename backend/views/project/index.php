<?php 

$this->registerCssFile ( "@web/plugin/jquery-jvectormap-1.2.2.css" );

$this->registerJsFile('@web/plugin/jquery-jvectormap-1.2.2.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/plugin/jquery-jvectormap-world-mill-en.js',['depends' => [\yii\web\JqueryAsset::className()]]);

use yii\web\View;
use yii\helpers\Html;

$str = <<<EOT

	$("#test").click(function(){
		alert("test");
	})

EOT;

$this->registerJs($str, View::POS_LOAD, 'form-js');

?>

<button id="test">test</button>
<h1>dropdown from data</h1>
<form>
<?php 

echo  Html::dropDownList( 'lecturer',
		'selected option',
		$arrLecturer,
		[
				'class' => 'form-control', 'id' => 'lecturer',
				'prompt'=>'เลือกผู้สอน',
				'options' =>
				[
						(string)$lecturerId => ['selected' => true]
				]

		]
)

?>
<input type="submit" value="ส่ง">
</form>

<h1>dropdown from array</h1>
<form>

<input type="submit" value="ส่ง">
</form>


<div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
          
          
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
            </div>
