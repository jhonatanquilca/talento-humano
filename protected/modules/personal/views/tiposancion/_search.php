<?php
/** @var TiposancionController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'idtipoSancion'); ?>

<?php echo $form->textFieldRow($model, 'detalles', array('maxlength' => 45)); ?>

<?php echo $form->dropDownListRow($model, 'sanciones_idsanciones', array('' => ' -- Seleccione -- ') + CHtml::listData(Sanciones::model()->findAll(), 'idsanciones', Sanciones::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
