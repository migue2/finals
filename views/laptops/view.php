<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Laptops','url'=>['/laptops/index']];
$this->params['breadcrums'][] = $model->name;

?>
<h1>View Your Laptop</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'name',
'description',
'Amount'
]]); ?>

<div class="pull-right">
    <?= Html::a('Update Post',
            ['/laptops/update','id'=>$model->id],
            ['class'=>'btn btn-primary glyphicon glyphicon-pencil']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger glyphicon glyphicon-trash',
            'data' => [
                'confirm' => 'Are you sure you want to delete this laptop?',
                'method' => 'post',
            ],
        ]) ?>
    
</div>