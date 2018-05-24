<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Update Your Buyer</h1>

<div class="row">
	<div class="col-md-6">

		<?php $form = ActiveForm::begin() ?>

			<?= $form->field($model, 'name')->textInput() ?>

			<?= $form->field($model, 'gender')->textInput() ?>

			<?= $form->field($model, 'address')->textInput() ?>

			<?= $form->field($model, 'phone_no')->textInput() ?>
			
			<div class="form-group">
    	<?= Html::submitButton("Update Buyer", ['class'=>'btn btn-primary']); ?>
			</div>


			<?php ActiveForm::end(); ?>
	</div>
</div>
