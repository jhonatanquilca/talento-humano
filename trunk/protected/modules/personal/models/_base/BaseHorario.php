<?php

/**
 * This is the model base class for the table "horario".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Horario".
 *
 * Columns in table "horario" available as properties of the model,
 * followed by relations of table "horario" available as properties of the model.
 *
 * @property integer $idhorario
 * @property string $horaEntrada
 * @property string $horaSalida
 * @property string $descripcion
 *
 * @property Asistencia[] $asistencias
 * @property Atrazos[] $atrazoses
 * @property Empleado[] $empleados
 */
abstract class BaseHorario extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'horario';
    }

    public static function representingColumn() {
        return 'horaEntrada';
    }

    public function rules() {
        return array(
            array('idhorario', 'required'),
            array('idhorario', 'numerical', 'integerOnly'=>true),
            array('descripcion', 'length', 'max'=>45),
            array('horaEntrada, horaSalida', 'safe'),
            array('horaEntrada, horaSalida, descripcion', 'default', 'setOnEmpty' => true, 'value' => null),
            array('idhorario, horaEntrada, horaSalida, descripcion', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'asistencias' => array(self::HAS_MANY, 'Asistencia', 'horario_idhorario1'),
            'atrazoses' => array(self::HAS_MANY, 'Atrazos', 'horario_idhorario1'),
            'empleados' => array(self::HAS_MANY, 'Empleado', 'horario_idhorario1'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'idhorario' => Yii::t('app', 'Idhorario'),
                'horaEntrada' => Yii::t('app', 'Hora Entrada'),
                'horaSalida' => Yii::t('app', 'Hora Salida'),
                'descripcion' => Yii::t('app', 'Descripcion'),
                'asistencias' => null,
                'atrazoses' => null,
                'empleados' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('idhorario', $this->idhorario);
        $criteria->compare('horaEntrada', $this->horaEntrada, true);
        $criteria->compare('horaSalida', $this->horaSalida, true);
        $criteria->compare('descripcion', $this->descripcion, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}