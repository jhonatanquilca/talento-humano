<?php
/** @var AtrazosController $this */
/** @var Atrazos $data */
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
                
        <?php if (!empty($data->horaEntrada2)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('horaEntrada2')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->horaEntrada2, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->horaEntrada2)); ?>
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
                
        <?php if (!empty($data->sanciones_idsanciones)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('sanciones_idsanciones')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->sanciones_idsanciones); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->sancionesIdsanciones1->descripcion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('sanciones_idsanciones1')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->sancionesIdsanciones1->descripcion); ?>
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