<?php echo "<?php\n" ?>
/** @var <?php echo $this->controllerClass; ?> $this */
/** @var <?php echo $this->modelClass; ?> $model */
?>
<div class = "empty-model">
    <div class = "row-fluid">
        <div class = "span3">
            <div class = "empty-model-icon"><i class = "aweso-group"></i></div>
        </div>
        <div class = "span9">
            <div class = "empty-model-description">
                <h1><?php echo "<?php echo \$model->label(2) ?>"
?></h1>
                <h2><?php echo"La mejor manera de tener la informaci&oacute;n de sus <?php echo \$model->label(2) ?> organizada." ?></h2>
                <?php
                echo "  <?php \n" .
                "echo CHtml::link('<i class=\"aweso-plus\"></i> Crear Nuevo', array('/'.\$this->module->id.'/'.\$this->id.'/create'), array( \n" .
                "'class' => 'btn btn-large btn-success' \n" .
                "));"
                . " ?>"
                ?>                
            </div>
        </div>
    </div>
</div>

