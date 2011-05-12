<?php
$this->breadcrumbs=array(
	'Softwares'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Software', 'url'=>array('index')),
	array('label'=>'Create Software', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('software-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Softwares</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'software'=>$software,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'software-grid',
	'dataProvider'=>$software->search(),
	'filter'=>$software,
	'columns'=>array(
		'NOME_COM_PROGRAMA',
		'VERSAO',
		'SENHA',
		'IDENTIFICACAO_PRINCIPAL_ARQUIV',
		'LOGIN',
		'DATA_ENTRADA',
		/*
		'SGBD',
		'DATA_FINAL',
		'QTDE_HORA_AVALIADA',
		'IDENTIF_SISTEMA_PED',
		'OBSERVACOES_FINAIS',
		'LING_PROGR',
		'IDENTIF_DOS_SISTEMAS_DE_GESTAO',
		'MATRSIAPE',
		'CNPJ',
		'TIPO_INTEGRACAO_PAF_ECF',
		'TIPO_IMPRESSAO_ITEM_CUPOM',
		'MEIO_GERACAO_SINTEGRA',
		'TIPO_FUNCIONAMENTO',
		'TRATATAMENTO_INTERRUP_IMPRESSA',
		'TIPO_DESENVOLVIMENTO',
		'SISTEMA_OPERACIONAL',
		'COD_TIPO_AVALIACAO',
		'MD5_CONJUNTO_ARQUIVOS_EXE',
		'MD5_PRINCIPAL_EXECUTAVEL',
		'COD_SOFTWARE',
		'GERENTE',
		'NUM_LAUDO',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
