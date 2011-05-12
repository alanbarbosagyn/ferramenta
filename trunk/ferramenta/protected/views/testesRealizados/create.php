<?php
$this->breadcrumbs=array(
	'Testes Realizadoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TestesRealizados', 'url'=>array('index')),
	array('label'=>'Manage TestesRealizados', 'url'=>array('admin')),
);
?>

<h1>Create TestesRealizados</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>