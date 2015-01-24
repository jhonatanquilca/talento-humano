<?php
/** @var VacacionesController $this */
/** @var Vacaciones $model */
$this->breadcrumbs=array(
	$model->label(2) => array('index'),
	Yii::t('AweCrud.app', 'Create'),
);
$this->header='<i class="aweso-paper-clip aweso-2x"></i> '.  Yii::t('AweCrud.app', 'Create') .' '. Vacaciones::label() ;
$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List').' '.Vacaciones::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</fieldset>