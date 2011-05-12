<?php
$this->breadcrumbs=array(
	'Softwares'=>array('index'),
	'Ficha de Inscrição',
);

$this->menu=array(
	array('label'=>'Listar Ficha de Inscrição', 'url'=>array('index')),
	array('label'=>'Manage Software', 'url'=>array('admin')),
);
?>

<h1>Create Software</h1>

<?php echo $this->renderPartial('_form', array('software'=>$software,'empresa'=>$empresa,'endereco'=>$endereco)); ?>