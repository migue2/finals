<?php
use app\models\Laptops;
use yii\helpers\Html;
?>

<h1>
    <span class="pull-left">
    <?= Html::a('Create Laptop',['/laptops/create'],
    ['class'=>'btn btn-primary glyphicon glyphicon-plus']); ?>
    </span>

    <span class="pull-right">
    <?= Html::a('click buyer',['/buyer/index'],
    ['class'=>'btn btn-primary glyphicon glyphicon-share-alt']); ?>
    </span>
</h1>
    

<table class="table table-borderd table-stripped">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Amount</th>
    </tr>

    <?php foreach ($laptops as $laptop): ?> 
        <tr>
            <th><?=Html::a($laptop->name,['/laptops/view','id'=> $laptop ->id])?></th>
            <th><?= $laptop->description ?></th>
            <th><?= $laptop->Amount ?></th>
        </tr>
        <?php endforeach; ?>
</table>
