<?php
/** @var UsuarioController $this */
/** @var Usuario $data */
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
                
        <?php if (!empty($data->usuario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('usuario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->usuario); ?>
            </div>
        </div>

        <?php endif; ?>
                    
        <?php if (!empty($data->tipoUsuario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tipoUsuario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tipoUsuario); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>