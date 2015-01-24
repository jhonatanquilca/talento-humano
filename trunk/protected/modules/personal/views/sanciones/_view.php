<?php
/** @var SancionesController $this */
/** @var Sanciones $data */
?>
<div class="view">
                    
        <?php if (!empty($data->descripcion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->descripcion); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->fechaSancion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fechaSancion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fechaSancion, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fechaSancion)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->empleado)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('empleado')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->empleado); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->tipoSancion_idtipoSancion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tipoSancion_idtipoSancion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tipoSancion_idtipoSancion); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>