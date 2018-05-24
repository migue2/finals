<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Laptops;
use app\models\Buyer;
use yii\widgets\ActiveForm;
?>
<h1>Update Your Company</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

            <?= $form->field($model,'laptops_id')->dropDownList(ArrayHelper::map(
				Laptops::find()->asArray()->all(), 'id','name',''))?>
        
			<?= $form->field($model,'buyer_id')->dropDownList(ArrayHelper::map(
				Buyer::find()->asArray()->all(), 'id','name'))?>

			<?= $form->field($model, 'location')->textInput() ?>

			<?= $form->field($model, 'phone_no')->textInput() ?>
			
			<<div class="form-group">
    	<?= Html::submitButton("Update Company", ['class'=>'btn btn-primary']); ?>
			</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>
