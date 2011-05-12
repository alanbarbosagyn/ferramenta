<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($software,'NOME_COM_PROGRAMA'); ?>
		<?php echo $form->textField($software,'NOME_COM_PROGRAMA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'VERSAO'); ?>
		<?php echo $form->textField($software,'VERSAO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'SENHA'); ?>
		<?php echo $form->textField($software,'SENHA',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'IDENTIFICACAO_PRINCIPAL_ARQUIV'); ?>
		<?php echo $form->textField($software,'IDENTIFICACAO_PRINCIPAL_ARQUIV',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'LOGIN'); ?>
		<?php echo $form->textField($software,'LOGIN',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'DATA_ENTRADA'); ?>
		<?php echo $form->textField($software,'DATA_ENTRADA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'SGBD'); ?>
		<?php echo $form->textField($software,'SGBD',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'DATA_FINAL'); ?>
		<?php echo $form->textField($software,'DATA_FINAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'QTDE_HORA_AVALIADA'); ?>
		<?php echo $form->textField($software,'QTDE_HORA_AVALIADA',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'IDENTIF_SISTEMA_PED'); ?>
		<?php echo $form->textField($software,'IDENTIF_SISTEMA_PED',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'OBSERVACOES_FINAIS'); ?>
		<?php echo $form->textField($software,'OBSERVACOES_FINAIS',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'LING_PROGR'); ?>
		<?php echo $form->textField($software,'LING_PROGR',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'IDENTIF_DOS_SISTEMAS_DE_GESTAO'); ?>
		<?php echo $form->textField($software,'IDENTIF_DOS_SISTEMAS_DE_GESTAO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'MATRSIAPE'); ?>
		<?php echo $form->textField($software,'MATRSIAPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'CNPJ'); ?>
		<?php echo $form->textField($software,'CNPJ'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'TIPO_INTEGRACAO_PAF_ECF'); ?>
		<?php echo $form->textField($software,'TIPO_INTEGRACAO_PAF_ECF',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'TIPO_IMPRESSAO_ITEM_CUPOM'); ?>
		<?php echo $form->textField($software,'TIPO_IMPRESSAO_ITEM_CUPOM',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'MEIO_GERACAO_SINTEGRA'); ?>
		<?php echo $form->textField($software,'MEIO_GERACAO_SINTEGRA',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'TIPO_FUNCIONAMENTO'); ?>
		<?php echo $form->textField($software,'TIPO_FUNCIONAMENTO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'TRATATAMENTO_INTERRUP_IMPRESSA'); ?>
		<?php echo $form->textField($software,'TRATATAMENTO_INTERRUP_IMPRESSA',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'TIPO_DESENVOLVIMENTO'); ?>
		<?php echo $form->textField($software,'TIPO_DESENVOLVIMENTO',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'SISTEMA_OPERACIONAL'); ?>
		<?php echo $form->textField($software,'SISTEMA_OPERACIONAL',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'COD_TIPO_AVALIACAO'); ?>
		<?php echo $form->textField($software,'COD_TIPO_AVALIACAO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'MD5_CONJUNTO_ARQUIVOS_EXE'); ?>
		<?php echo $form->textField($software,'MD5_CONJUNTO_ARQUIVOS_EXE',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'MD5_PRINCIPAL_EXECUTAVEL'); ?>
		<?php echo $form->textField($software,'MD5_PRINCIPAL_EXECUTAVEL',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'COD_SOFTWARE'); ?>
		<?php echo $form->textField($software,'COD_SOFTWARE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'GERENTE'); ?>
		<?php echo $form->textField($software,'GERENTE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($software,'NUM_LAUDO'); ?>
		<?php echo $form->textField($software,'NUM_LAUDO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->