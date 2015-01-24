<?php
/** @var VacacionesController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'idvacaciones'); ?>

<?php echo $form->datepickerRow($model, 'fechaInicio', array('prepend' => '<i class="icon-calendar"></i>')); ?>

<?php echo $form->datepickerRow($model, 'fechaFin', array('prepend' => '<i class="icon-calendar"></i>')); ?>

<?php echo $form->textFieldRow($model, 'descripcion', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'empleado', array('maxlength' => 45)); ?>

<?php echo $form->dropDownListRow($model, 'empleado_idempleado', array('' => ' -- Seleccione -- ') + CHtml::listData(Empleado::model()->findAll(), 'idempleado', Empleado::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
