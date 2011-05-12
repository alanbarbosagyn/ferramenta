<?php
$this->breadcrumbs=array(
	'Testes Realizadoses'=>array('index'),
	$model->COD_REALIZACAO,
);

$this->menu=array(
	array('label'=>'List TestesRealizados', 'url'=>array('index')),
	array('label'=>'Create TestesRealizados', 'url'=>array('create')),
	array('label'=>'Update TestesRealizados', 'url'=>array('update', 'id'=>$model->COD_REALIZACAO)),
	array('label'=>'Delete TestesRealizados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->COD_REALIZACAO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TestesRealizados', 'url'=>array('admin')),
);
?>

<h1>View TestesRealizados #<?php echo $model->COD_REALIZACAO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TEMPOTOTAL',
		'CODICAO_ATENTIDO',
		'ALTERACAO_FONTE',
		'NAO_CONFORMIDADE',
		'COD_TESTE',
		'MATRICULA',
		'RESGISTRARDUVIDAS',
		'RESULTADO_FINAL',
		'COD_REALIZACAO',
		'COD_SOFTWARE',
	),
)); ?>
