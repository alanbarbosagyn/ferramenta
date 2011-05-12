<?php
$this->breadcrumbs=array(
	'Fichas'=>array('index'),
	$software->COD_SOFTWARE=>array('view','id'=>$software->COD_SOFTWARE),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Ficha de Inscrição', 'url'=>array('index')),
	array('label'=>'Preencher Ficha de Inscrição', 'url'=>array('create')),
	array('label'=>'Ver Ficha de Inscrição', 'url'=>array('view', 'id'=>$software->COD_SOFTWARE)),
	array('label'=>'Manage Software', 'url'=>array('admin')),
);
?>

<h1>Update Software <?php echo $software->COD_SOFTWARE; ?></h1>

<?php echo $this->renderPartial('_form', array('software'=>$software, 'empresa'=>$empresa, 'endereco'=>$endereco)); ?>