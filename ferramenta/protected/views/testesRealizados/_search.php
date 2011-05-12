<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TEMPOTOTAL'); ?>
		<?php echo $form->textField($model,'TEMPOTOTAL',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CODICAO_ATENTIDO'); ?>
		<?php echo $form->textField($model,'CODICAO_ATENTIDO',array('size'=>60,'maxlength'=>1500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALTERACAO_FONTE'); ?>
		<?php echo $form->textField($model,'ALTERACAO_FONTE',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAO_CONFORMIDADE'); ?>
		<?php echo $form->textField($model,'NAO_CONFORMIDADE',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COD_TESTE'); ?>
		<?php echo $form->textField($model,'COD_TESTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MATRICULA'); ?>
		<?php echo $form->textField($model,'MATRICULA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RESGISTRARDUVIDAS'); ?>
		<?php echo $form->textField($model,'RESGISTRARDUVIDAS',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RESULTADO_FINAL'); ?>
		<?php echo $form->textField($model,'RESULTADO_FINAL',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COD_REALIZACAO'); ?>
		<?php echo $form->textField($model,'COD_REALIZACAO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COD_SOFTWARE'); ?>
		<?php echo $form->textField($model,'COD_SOFTWARE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->