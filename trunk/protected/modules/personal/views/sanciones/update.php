<?php
/** @var SancionesController $this */
/** @var Sanciones $model */
$this->breadcrumbs=array(
	$model->label(2) => array('index'),
	Yii::t('app', $model->idsanciones) => array('view', 'id'=>$model->idsanciones),
	Yii::t('AweCrud.app', 'Update'),
);

$this->header='<i class="aweso-pencil aweso-2x"></i> '.  Yii::t('AweCrud.app', 'Update') .' '. Sanciones::label() ;
$this->menu=array(
//array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Sanciones::label(2), 'icon' => 'list', 'url' => array('index')),
//array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Sanciones::label(), 'icon' => 'plus', 'url' => array('create')),
//array('label' => Yii::t('AweCrud.app', 'View'), 'icon' => 'eye-open', 'url'=>array('view', 'id' => $model->idsanciones)),
array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idsanciones), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>    
    <?php echo $this->renderPartial('_form',array('model' => $model)); ?>
</fieldset>