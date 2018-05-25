<?php
use yii\widgets\DetailView;
use yii\helpers\html;


$this->params['breadcrums'][] = ['label'=> 'Company','url'=>['/company/index']];
$this->params['breadcrums'][] = $model->phone_no;

?>
<h1>View Your Company</h1>

<?= DetailView::widget([
'model' => $model,
'attributes' => [
'id',
'laptops_id',
'buyer_id',
'location',
'phone_no'
]]); ?>

<div class="pull-right">
    <?= Html::a('Update Company',
            ['/company/update','id'=>$model->id],
            ['class'=>'btn btn-primary glyphicon glyphicon-pencil']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger glyphicon glyphicon-trash',
            'data' => [
                'confirm' => 'Are you sure you want to delete this Laptop?',
                'method' => 'post',
            ],
        ]) ?>
    
</div>