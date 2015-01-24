<fieldset>
    <br/>
    <div class="row-fluid">
        <div class="span10">
            <!-- widget button -->
            <div class="widget border-cyan" id="widget-button">

                <!-- widget header -->
                <div class="widget-header bg-cyan">
                    <!-- widget title -->
                    <h4 class="widget-title"><i class="aweso-user"></i> <?php echo ucwords(CrugeTranslator::t("registrarse")); ?></h4>
                    <!-- widget action, you can also use btn, btn-group, nav-tabs or nav-pills (also support dropdown). enjoy! -->
                    <div class="widget-action">
                        <button data-toggle="collapse" data-collapse="#widget-button" class="btn">
                            <i class="aweso-chevron-up color-cyan" data-toggle-icon="aweso-chevron-down  aweso-chevron-up"></i>
                        </button>
                    </div>
                </div><!-- /widget header -->
                <div class="widget-content form bg-white ">

                    <!--                    <h1 class="text-center"></h1>-->
                    <!--<div class="form">-->
                    <?php
                    /*
                      $model:  es una instancia que implementa a ICrugeStoredUser
                     */
                    ?>
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'registration-form',
//                        'type'=>'horizontal',
                        'enableAjaxValidation' => false,
                        'enableClientValidation' => false,
//                        'options'=>array('class'=>'form-horizontal'),
                    ));
                    ?>
                    <!--<div class="row form-group-vert">-->
                    <h6><?php echo ucfirst(CrugeTranslator::t("datos de la cuenta")); ?></h6>
                    <?php echo $form->errorSummary($model); ?>
                    <?php
                    foreach (CrugeUtil::config()->availableAuthModes as $authmode) {
                        echo "<div class='control-group'>";
                        echo $form->labelEx($model, $authmode, array('class' => 'control-label'));
                        echo "<div class='controls'>";
                        echo $form->textField($model, $authmode);
                        echo $form->error($model, $authmode);
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                    <div class="control-group">
                        <?php echo $form->labelEx($model, 'newPassword'); ?>
                        <div class="controls">
                            <div class="input-append input-append-inline">
                                <?php echo $form->textField($model, 'newPassword'); ?>

                                <script>
                                    function fnSuccess(data) {
                                        $('#CrugeStoredUser_newPassword').val(data);
                                    }
                                    function fnError(e) {
                                        alert("error: " + e.responseText);
                                    }
                                    function generarPass() {
                                        $('#yt0').click();
                                    }
                                </script>
                                <button class="btn bg-cyan" type="button" onclick="generarPass()"><i class="icon-refresh"></i></button>
                                <?php
                                echo CHtml::ajaxbutton(
                                        CrugeTranslator::t("Generar una nueva clave")
                                        , Yii::app()->user->ui->ajaxGenerateNewPasswordUrl
                                        , array('success' => new CJavaScriptExpression('fnSuccess'),
                                    'error' => new CJavaScriptExpression('fnError'))
                                        , array('class' => 'hidden'
                                        ,)
                                );
                                ?>
                            </div>
                            <?php echo $form->error($model, 'newPassword'); ?>
                        </div>
                        <p class='hint'><?php
                            echo CrugeTranslator::t(
                                    "su contrase&ncaron;a, letras o digitos o los caracteres @#$%. minimo 6 simbolos.");
                            ?></p>
                    </div>
                    <!--</div>-->


                    <!-- inicio de campos extra definidos por el administrador del sistema -->
                    <?php
                    if (count($model->getFields()) > 0) {
                        echo "<div class='row form-group-vert'>";
                        echo "<h6>" . ucfirst(CrugeTranslator::t("perfil")) . "</h6>";
                        foreach ($model->getFields() as $f) {
                            // aqui $f es una instancia que implementa a: ICrugeField
                            echo "<div class='col'>";
                            echo Yii::app()->user->um->getLabelField($f);
                            echo Yii::app()->user->um->getInputField($model, $f);
                            echo $form->error($model, $f->fieldname);
                            echo "</div>";
                        }
                        echo "</div>";
                    }
                    ?>
                    <!-- fin de campos extra definidos por el administrador del sistema -->


                    <!-- inicio - terminos y condiciones -->
                    <?php
                    if (Yii::app()->user->um->getDefaultSystem()->getn('registerusingterms') == 1) {
                        ?>
                        <div class='form-group-vert'>
                            <h6><?php echo ucfirst(CrugeTranslator::t("terminos y condiciones")); ?></h6>
                            <?php
                            echo CHtml::textArea('terms'
                                    , Yii::app()->user->um->getDefaultSystem()->get('terms')
                                    , array('readonly' => 'readonly', 'rows' => 5, 'cols' => '80%')
                            );
                            ?>
                            <div><span class='required'>*</span><?php echo CrugeTranslator::t(Yii::app()->user->um->getDefaultSystem()->get('registerusingtermslabel')); ?></div>
                            <?php echo $form->checkBox($model, 'terminosYCondiciones'); ?>
                            <?php echo $form->error($model, 'terminosYCondiciones'); ?>
                        </div>
                        <!-- fin - terminos y condiciones -->
                    <?php } ?>



                    <!-- inicio pide captcha -->
                    <?php if (Yii::app()->user->um->getDefaultSystem()->getn('registerusingcaptcha') == 1) { ?>
                        <div class='form-group-vert'>
                            <h6><?php echo ucfirst(CrugeTranslator::t("codigo de seguridad")); ?></h6>
                            <div class="row">
                                <div>
                                    <?php $this->widget('CCaptcha'); ?>
                                    <?php echo $form->textField($model, 'verifyCode'); ?>
                                </div>
                                <div class="hint"><?php echo CrugeTranslator::t("por favor ingrese los caracteres o digitos que vea en la imagen"); ?></div>
                                <?php echo $form->error($model, 'verifyCode'); ?>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- fin pide captcha-->



                    <div class="form-actions text-center">
                        <div class="form-actions-float">
                            <?php Yii::app()->user->ui->tbutton("Registrarse"); ?>
                            <a onclick="javascript:history.go(-1)" class="btn btn-warning" id="yw1"><i class="icon-remove"></i> Cancelar</a>
                        </div>
                    </div>

                    <?php $this->endWidget(); ?>
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</fieldset>
