<?php
/** @var UsuarioController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'idusuario'); ?>

<?php echo $form->textFieldRow($model, 'nombre', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'apellido', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'usuario', array('maxlength' => 45)); ?>

<?php echo $form->passwordFieldRow($model, 'pass', array('maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'tipoUsuario', array('maxlength' => 45)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
