<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD_REALIZACAO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->COD_REALIZACAO), array('view', 'id'=>$data->COD_REALIZACAO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TEMPOTOTAL')); ?>:</b>
	<?php echo CHtml::encode($data->TEMPOTOTAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CODICAO_ATENTIDO')); ?>:</b>
	<?php echo CHtml::encode($data->CODICAO_ATENTIDO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALTERACAO_FONTE')); ?>:</b>
	<?php echo CHtml::encode($data->ALTERACAO_FONTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAO_CONFORMIDADE')); ?>:</b>
	<?php echo CHtml::encode($data->NAO_CONFORMIDADE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD_TESTE')); ?>:</b>
	<?php echo CHtml::encode($data->COD_TESTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MATRICULA')); ?>:</b>
	<?php echo CHtml::encode($data->MATRICULA); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('RESGISTRARDUVIDAS')); ?>:</b>
	<?php echo CHtml::encode($data->RESGISTRARDUVIDAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RESULTADO_FINAL')); ?>:</b>
	<?php echo CHtml::encode($data->RESULTADO_FINAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COD_SOFTWARE')); ?>:</b>
	<?php echo CHtml::encode($data->COD_SOFTWARE); ?>
	<br />

	*/ ?>

</div>