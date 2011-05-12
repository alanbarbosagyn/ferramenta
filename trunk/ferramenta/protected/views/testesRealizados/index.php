<?php
$this->breadcrumbs=array(
	'Testes Realizadoses',
);

$this->menu=array(
	array('label'=>'Create TestesRealizados', 'url'=>array('create')),
	array('label'=>'Manage TestesRealizados', 'url'=>array('admin')),
);
?>

<h1>Testes Realizadoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
