<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'testes-realizados-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TEMPOTOTAL'); ?>
		<?php echo $form->textField($model,'TEMPOTOTAL',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'TEMPOTOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CODICAO_ATENTIDO'); ?>
		<?php echo $form->textField($model,'CODICAO_ATENTIDO',array('size'=>60,'maxlength'=>1500)); ?>
		<?php echo $form->error($model,'CODICAO_ATENTIDO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALTERACAO_FONTE'); ?>
		<?php echo $form->textField($model,'ALTERACAO_FONTE',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'ALTERACAO_FONTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NAO_CONFORMIDADE'); ?>
		<?php echo $form->textField($model,'NAO_CONFORMIDADE',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'NAO_CONFORMIDADE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD_TESTE'); ?>
		<?php echo $form->textField($model,'COD_TESTE'); ?>
		<?php echo $form->error($model,'COD_TESTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MATRICULA'); ?>
		<?php echo $form->textField($model,'MATRICULA'); ?>
		<?php echo $form->error($model,'MATRICULA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RESGISTRARDUVIDAS'); ?>
		<?php echo $form->textField($model,'RESGISTRARDUVIDAS',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'RESGISTRARDUVIDAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RESULTADO_FINAL'); ?>
		<?php echo $form->textField($model,'RESULTADO_FINAL',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'RESULTADO_FINAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COD_SOFTWARE'); ?>
		<?php echo $form->textField($model,'COD_SOFTWARE'); ?>
		<?php echo $form->error($model,'COD_SOFTWARE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->