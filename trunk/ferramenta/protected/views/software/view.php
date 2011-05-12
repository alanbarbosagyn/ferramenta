<?php
$this->breadcrumbs=array(
	'Softwares'=>array('index'),
	$software->COD_SOFTWARE,
);

$this->menu=array(
	array('label'=>'Listar Software', 'url'=>array('index')),
	array('label'=>'Create Software', 'url'=>array('create')),
	array('label'=>'Update Software', 'url'=>array('update', 'id'=>$software->COD_SOFTWARE)),
	array('label'=>'Delete Software', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$software->COD_SOFTWARE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Software', 'url'=>array('admin')),
);
?>

<h1>View Software #<?php echo $software->COD_SOFTWARE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$software,
	'attributes'=>array(
		'NOME_COM_PROGRAMA',
		'VERSAO',
		'SENHA',
		'IDENTIFICACAO_PRINCIPAL_ARQUIV',
		'LOGIN',
		'DATA_ENTRADA',
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
	),
)); ?>
