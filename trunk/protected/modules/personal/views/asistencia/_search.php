<?php
/** @var AsistenciaController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'idasistencia'); ?>

<?php echo $form->datepickerRow($model, 'fecha', array('prepend' => '<i class="icon-calendar"></i>')); ?>

<?php echo $form->textFieldRow($model, 'cedula', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'empleados', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'horario_idhorario'); ?>

<?php echo $form->textFieldRow($model, 'permiso_idpermiso'); ?>

<?php echo $form->dropDownListRow($model, 'horario_idhorario1', array('' => ' -- Seleccione -- ') + CHtml::listData(Horario::model()->findAll(), 'idhorario', Horario::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
