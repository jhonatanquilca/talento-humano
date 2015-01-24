<?php
$this->pageTitle = Yii::t('app', 'Roles y Asignaciones');
?>

<br/>
<br/>
<div class="row-fluid">
    <div class="span12">
        <!-- widget button -->
        <div class="widget border-green" id="widget-button">

            <!-- widget header -->
            <div class="widget-header bg-green">
                <!-- widget title -->
                <h4 class="widget-title"><i class="aweso-key"></i><?php echo ucwords(CrugeTranslator::t("roles")); ?></h4>
                <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                <div class="widget-action">
                    <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                        <i class="aweso-chevron-up color-green" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                    </button>
                </div>
            </div><!-- /widget header -->


            <div class="widget-content bg-white in">
                <div class="row-fluid">
                    <div class='col-lg-12'>
                        <?php
                        echo CHtml::link('<i class="icon-plus icon-white"></i> ' . CrugeTranslator::t("Crear Nuevo Rol")
                                , Yii::app()->user->ui->getRbacAuthItemCreateUrl(CAuthItem::TYPE_ROLE), array('class' => 'btn btn-success pull-right'));
                        ?>
                    </div>
                </div>

                <?php $this->renderPartial('_listauthitems', array('dataProvider' => $dataProvider), false); ?>
            </div>
        </div>
    </div>
</div>