<?php
$this->breadcrumbs=array(
	'Testes Realizadoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TestesRealizados', 'url'=>array('index')),
	array('label'=>'Create TestesRealizados', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('testes-realizados-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Testes Realizadoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'testes-realizados-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'TEMPOTOTAL',
		'CODICAO_ATENTIDO',
		'ALTERACAO_FONTE',
		'NAO_CONFORMIDADE',
		'COD_TESTE',
		'MATRICULA',
		/*
		'RESGISTRARDUVIDAS',
		'RESULTADO_FINAL',
		'COD_REALIZACAO',
		'COD_SOFTWARE',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
