<?php
use yii\helpers\Html;
?>

<h1>
    <span class="pull-left">
    <?= Html::a('Create Company',['/company/create'],
    ['class'=>'btn btn-primary glyphicon glyphicon-plus']); ?>
    </span>
</h1>
    

<table class="table table-borderd table-stripped">
    <tr>
        <th>Laptops</th>
        <th>Location</th>
        <th>laptops_ID</th>
        <th>Phone_No</th>

        
    </tr>

    <?php foreach ($model as $models): ?> 
        <tr>
            <th><?=Html::a($models->laptops->name,['/company/view','id'=> $models ->id])?></th>
            <th><?= $models->location?></th>
            <th><?= $models->buyer_id ?></th>
            <th><?= $models->phone_no?></th>
        </tr>
        <?php endforeach; ?>
</table>

