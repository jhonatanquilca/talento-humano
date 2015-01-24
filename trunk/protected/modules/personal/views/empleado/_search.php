<?php
/** @var EmpleadoController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'idempleado'); ?>

<?php echo $form->textFieldRow($model, 'nombre', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'apellido', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'direccion', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'telefono', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'correo', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'fechaIngreso'); ?>

<?php echo $form->textFieldRow($model, 'area', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'foto'); ?>

<?php echo $form->textFieldRow($model, 'horario_idhorario'); ?>

<?php echo $form->dropDownListRow($model, 'horario_idhorario1', array('' => ' -- Seleccione -- ') + CHtml::listData(Horario::model()->findAll(), 'idhorario', Horario::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
