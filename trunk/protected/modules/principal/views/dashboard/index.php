<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>

<!-- content header -->
<!--<header class="content-header no-border">-->
<header class="content-header ">
    <!-- content title-->

    <ul class="page-header">
        <!--content title-->
        <div class="page-header">
            <div class="row-fluid">
                <!--<div class="span2">-->

                    <h2><i class="aweso-home aweso-2x"></i>   <!-- HOME --> <b> <strong> UNIVERSIDAD TECNICA DEL NORTE </strong> </b></h2>

                <!--</div>-->
            </div>
        </div>

    </ul>

</header> 
<!--/ content header -->

<!-- content page -->

<div class=" content-page row-fluid">
    <br/>

    <!-- main page, you're application here -->
    <div class="main-page">
        <div class="content-inner">
            <!-- SHORTCUT LINE DASHBOARD
            ================================================== -->
            <!-- row #1 -->

            <div class="shortcut row-fluid">
                <!-- tile -->
                <div data-looper="go" data-interval="4000" class="span3 tile bg-green looper slide up">
                    <!-- tile-content -->
                    <div class="tile-content">
                        <!-- block looper -->
                        <div class="looper-inner">
                            <div class="item">
                                <a href="<?php // echo Yii::app()->createUrl('/personal/empleado/admin') ?>"><i class="aweso-group"></i></a>
                            </div><!-- /item -->
                            <div class="item">
                                <a href="<?php // echo Yii::app()->createUrl('/personal/empleado/admin') ?>">
                                    <div class="text-based">
                                        <p class="lead">Administra a tus clientes activos.</p>
                                    </div>
                                </a>
                            </div>

                        </div><!-- /block looper -->
                    </div><!-- /tile-content -->

                    <div class="tile-peek">
                        <div class="icon"><i class="aweso-user"></i> </div>
                        <!--<span class="brand">-->
                        <?php // echo count(Empleado::model()->activos()->findAll()) ?>
                        <!--</span>-->
                        <span class="badge"> <?php // echo Empleado::model()->label(2) ?></span>
                    </div><!-- /tile-peek -->
                </div><!-- /tile -->

                <!-- tile -->
                <div data-looper="go" data-interval="6000" class="span2 tile bg-cyan looper slide up">
                    <!--tile-content--> 
                    <div class="tile-content">
                        <!--                        block looper -->
                        <div class="looper-inner">
                            <div class="item">
                                <a href="<?php // echo Yii::app()->createUrl('/actividades/actividad/admin')          ?>"><i class="aweso-time"></i></a>
                            </div> 
                            <!--/item--> 
                            <div class="item">
                                <a href="<?php // echo Yii::app()->createUrl('/actividades/actividad/admin')          ?>">
                                    <div class="text-based">
                                        <p class="lead">Revisa el Historial Actividades.</p>
                                    </div>
                                </a>
                            </div> 
                            <!--/item--> 
                        </div> 
                        <!--/block looper--> 
                    </div> 
                    <!--/tile-content--> 
                    <div class="tile-peek">
                        <span class="badge"> <?php // echo Actividad::model()->label(2)          ?></span>
                    </div><!-- /tile-peek -->
                </div>
                <!-- /tile -->

            </div> 


        </div><!-- /content-inner-->
    </div><!-- /main-page-->
</div>

<!-- /content page -->