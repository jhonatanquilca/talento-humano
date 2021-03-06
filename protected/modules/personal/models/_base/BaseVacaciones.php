<?php

/**
 * This is the model base class for the table "vacaciones".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Vacaciones".
 *
 * Columns in table "vacaciones" available as properties of the model,
 * followed by relations of table "vacaciones" available as properties of the model.
 *
 * @property integer $idvacaciones
 * @property string $fechaInicio
 * @property string $fechaFin
 * @property string $descripcion
 * @property string $empleado
 * @property integer $empleado_idempleado
 *
 * @property Empleado $empleadoIdempleado
 */
abstract class BaseVacaciones extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'vacaciones';
    }

    public static function representingColumn() {
        return 'fechaInicio';
    }

    public function rules() {
        return array(
            array('idvacaciones, empleado_idempleado', 'required'),
            array('idvacaciones, empleado_idempleado', 'numerical', 'integerOnly'=>true),
            array('descripcion, empleado', 'length', 'max'=>45),
            array('fechaInicio, fechaFin', 'safe'),
            array('fechaInicio, fechaFin, descripcion, empleado', 'default', 'setOnEmpty' => true, 'value' => null),
            array('idvacaciones, fechaInicio, fechaFin, descripcion, empleado, empleado_idempleado', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'empleadoIdempleado' => array(self::BELONGS_TO, 'Empleado', 'empleado_idempleado'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'idvacaciones' => Yii::t('app', 'Idvacaciones'),
                'fechaInicio' => Yii::t('app', 'Fecha Inicio'),
                'fechaFin' => Yii::t('app', 'Fecha Fin'),
                'descripcion' => Yii::t('app', 'Descripcion'),
                'empleado' => Yii::t('app', 'Empleado'),
                'empleado_idempleado' => Yii::t('app', 'Empleado Idempleado'),
                'empleadoIdempleado' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('idvacaciones', $this->idvacaciones);
        $criteria->compare('fechaInicio', $this->fechaInicio, true);
        $criteria->compare('fechaFin', $this->fechaFin, true);
        $criteria->compare('descripcion', $this->descripcion, true);
        $criteria->compare('empleado', $this->empleado, true);
        $criteria->compare('empleado_idempleado', $this->empleado_idempleado);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}