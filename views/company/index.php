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
        <th>Buyer</th>
        <th>Company</th>
        
    </tr>

    <?php foreach ($model as $models): ?> 
        <tr>
            <th><?=Html::a($models->laptops->name,['/producer/view','id'=> $models ->id])?></th>
            <th><?= $models->buyer->name ?></th>
            <th><?= $models->location ?></th>
            <th><?= $models->phone_no?></th>
        </tr>
        <?php endforeach; ?>
</table>

