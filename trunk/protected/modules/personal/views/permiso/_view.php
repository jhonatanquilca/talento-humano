<?php
/** @var PermisoController $this */
/** @var Permiso $data */
?>
<div class="view">
                    
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
                
        <?php if (!empty($data->fechaPermiso)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fechaPermiso')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fechaPermiso, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fechaPermiso)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
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
                
        <?php if (!empty($data->asistenciaIdasistencia->fecha)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('asistencia_idasistencia')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->asistenciaIdasistencia->fecha); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>