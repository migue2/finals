<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Buyer','url'=>['/buyer/index']];
$this->params['breadcrums'][] = $model->name;

?>
<h1>View Your Buyer</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'name',
'gender',
'address',
'phone_no'
]]); ?>

<div class="pull-right">
	<?= Html::a('Update Buyer',
            ['/buyer/update','id'=>$model->id],
            ['class'=>'btn btn-primary glyphicon glyphicon-pencil']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger glyphicon glyphicon-trash',
            'data' => [
                'confirm' => 'Are you sure you want to delete this Laptop?',
                'method' => 'post',
            ],
        ]) ?>
	
</div>
