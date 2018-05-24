<?php
use yii\helpers\Html;
?>

<h1>
	<span class="pull-left">
    <?= Html::a('Create Buyer',['/buyer/create'],
    ['class'=>'btn btn-primary glyphicon glyphicon-plus']); ?>
	</span>
    <span class="pull-right">
    <?= Html::a('Go to back to laptops',['/laptops/index'],
    ['class'=>'btn btn-primary glyphicon glyphicon-arrow-left']); ?>
    </span>
</h1>
    

<table class="table table-borderd table-stripped">
	<tr>
		<th>Full Name</th>
		<th>Gender</th>
		<th>Address</th>
		<th>Phone_No</th>
	</tr>

	<?php foreach ($model as $model): ?> 
		<tr>
			<th><?=Html::a($model->name,['/buyer/view','id'=> $model ->id])?></th>
			<th><?= $model->gender ?></th>
			<th><?= $model->address ?></th>
			<th><?= $model->phone_no ?></th>

		</tr>
		<?php endforeach; ?>
</table>

