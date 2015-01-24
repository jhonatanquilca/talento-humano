<?php
/** @var EmpleadoController $this */
/** @var Empleado $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->apellido)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->apellido); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->direccion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->direccion); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->telefono)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->telefono); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->correo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->correo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->fechaIngreso)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fechaIngreso')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fechaIngreso, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fechaIngreso)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->area)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->area); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->foto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->foto); ?>
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