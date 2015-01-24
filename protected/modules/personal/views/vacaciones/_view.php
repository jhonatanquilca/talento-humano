<?php
/** @var VacacionesController $this */
/** @var Vacaciones $data */
?>
<div class="view">
                    
        <?php if (!empty($data->fechaInicio)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fechaInicio')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fechaInicio, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fechaInicio)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->fechaFin)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fechaFin')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fechaFin, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fechaFin)); ?>
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
                
        <?php if (!empty($data->empleadoIdempleado->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('empleado_idempleado')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->empleadoIdempleado->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>