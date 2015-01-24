<?php
/** @var AsistenciaController $this */
/** @var Asistencia $data */
?>
<div class="view">
                    
        <?php if (!empty($data->fecha)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->cedula)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cedula); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->empleados)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('empleados')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->empleados); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->horario_idhorario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('horario_idhorario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->horario_idhorario); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->permiso_idpermiso)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('permiso_idpermiso')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->permiso_idpermiso); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->horarioIdhorario1->horaEntrada)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('horario_idhorario1')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->horarioIdhorario1->horaEntrada); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>