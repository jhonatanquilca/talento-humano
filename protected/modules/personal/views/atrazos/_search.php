<?php
/** @var AtrazosController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'idatrazos'); ?>

<?php echo $form->datepickerRow($model, 'fecha', array('prepend' => '<i class="icon-calendar"></i>')); ?>

<?php echo $form->textFieldRow($model, 'horaEntrada2'); ?>

<?php echo $form->textFieldRow($model, 'empleado', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'horario_idhorario'); ?>

<?php echo $form->textFieldRow($model, 'sanciones_idsanciones'); ?>

<?php echo $form->dropDownListRow($model, 'sanciones_idsanciones1', array('' => ' -- Seleccione -- ') + CHtml::listData(Sanciones::model()->findAll(), 'idsanciones', Sanciones::representingColumn())); ?>

<?php echo $form->dropDownListRow($model, 'horario_idhorario1', array('' => ' -- Seleccione -- ') + CHtml::listData(Horario::model()->findAll(), 'idhorario', Horario::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
