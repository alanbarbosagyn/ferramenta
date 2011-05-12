<?php
$this->breadcrumbs=array(
	'Testes Realizadoses'=>array('index'),
	$model->COD_REALIZACAO=>array('view','id'=>$model->COD_REALIZACAO),
	'Update',
);

$this->menu=array(
	array('label'=>'List TestesRealizados', 'url'=>array('index')),
	array('label'=>'Create TestesRealizados', 'url'=>array('create')),
	array('label'=>'View TestesRealizados', 'url'=>array('view', 'id'=>$model->COD_REALIZACAO)),
	array('label'=>'Manage TestesRealizados', 'url'=>array('admin')),
);
?>

<h1>Update TestesRealizados <?php echo $model->COD_REALIZACAO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>