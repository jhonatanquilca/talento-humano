<?php
/** @var HorarioController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'idhorario'); ?>

<?php echo $form->textFieldRow($model, 'horaEntrada'); ?>

<?php echo $form->textFieldRow($model, 'horaSalida'); ?>

<?php echo $form->textFieldRow($model, 'descripcion', array('maxlength' => 45)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
