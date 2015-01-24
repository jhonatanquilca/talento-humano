<?php
/** @var SancionesController $this */
/** @var Sanciones $model */
$this->breadcrumbs=array(
	'Sanciones'=>array('index'),
	$model->idsanciones,
);

$this->header='<i class="aweso-info-sign aweso-2x"></i> '.  Yii::t('AweCrud.app', 'View') .' '. Sanciones::label() .' '. CHtml::encode($model);
$this->menu=array(
//array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Sanciones::label(2), 'icon' => 'list', 'url' => array('index')),
//array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Sanciones::label(), 'icon' => 'plus', 'url' => array('create')),
//array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->idsanciones)),
//array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idsanciones), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <div class="row-fluid">
        <div class="span5">
            <!-- widget button -->
            <div class="widget border-cyan" id="widget-button">

                <!-- widget header -->
                <div class="widget-header bg-cyan">
                    <!-- widget title -->
                    <h4 class="widget-title"><i class="aweso-info"></i> Informacion General</h4>
                    <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                    <div class="widget-action">
                        <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                            <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                        </button>
                    </div>
                </div><!-- /widget header -->
                <!-- widget content -->
                <div class="widget-content bg-white">

                    <?php $this->widget('bootstrap.widgets.TbDetailView',array(
                    'data' => $model,
                    'attributes' => array(
                                            'idsanciones',
                                            'descripcion',
                                            'fechaSancion',
                                            'empleado',
                                            'tipoSancion_idtipoSancion',
                                        ),
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</fieldset>