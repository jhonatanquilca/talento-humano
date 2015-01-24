<?php
/** @var TiposancionController $this */
/** @var Tiposancion $data */
?>
<div class="view">
                    
        <?php if (!empty($data->detalles)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('detalles')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->detalles); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->sancionesIdsanciones->descripcion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('sanciones_idsanciones')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->sancionesIdsanciones->descripcion); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>