<?php
/** @var TiposancionController $this */
/** @var Tiposancion $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
'id' => 'tiposancion-form',
'type'=>'horizontal',                
'enableAjaxValidation' => true,
'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
'enableClientValidation' => false,

)); ?>
<div class="row-fluid">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-cyan" id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-cyan">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-user"></i> <?php echo Yii::t('AweCrud.app',$model->isNewRecord ? 'Create' : 'Update') . ' ' . Tiposancion::label(); ?></h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->
            <div class="widget-content form bg-white">


                <p class="note">
                    <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
                    <?php echo Yii::t('AweCrud.app', 'are required') ?>.                </p>

                <?php echo $form->errorSummary($model) ?>

                 <!--@TODO: Utilizar la estructura comentada si el formulario es de--> 
                <!--type=vertical caso contrario si es hirizontal no cambia-->
                <!--                <div class="control-group">
                <?php // echo $form->labelEx($model, 'nombre', array('class' => 'control-label')); ?>
                                    <div class="controls">
                <?php // echo $form->textField($model, 'nombre', array('maxlength' => 64)) ?>
                <?php // echo $form->error($model, 'nombre') ?> 
                                    </div>                                           
                                </div>-->
                                
                                                        <?php echo $form->textFieldRow($model, 'idtipoSancion') ?>
                                                        <?php echo $form->textFieldRow($model, 'detalles', array('maxlength' => 45)) ?>
                                                        <?php echo $form->dropDownListRow($model, 'sanciones_idsanciones', array('' => ' -- Seleccione -- ') + CHtml::listData(Sanciones::model()->findAll(), 'idsanciones', Sanciones::representingColumn())) ?>
                                                <div class="form-actions bg-silver">
                    <div class="form-actions-float">
                                                <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
                        <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
