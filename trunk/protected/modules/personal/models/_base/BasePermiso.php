<?php

/**
 * This is the model base class for the table "permiso".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Permiso".
 *
 * Columns in table "permiso" available as properties of the model,
 * followed by relations of table "permiso" available as properties of the model.
 *
 * @property integer $idpermiso
 * @property string $empleado
 * @property string $fechaPermiso
 * @property string $descripcion
 * @property integer $asistencia_idasistencia
 *
 * @property Asistencia $asistenciaIdasistencia
 */
abstract class BasePermiso extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'permiso';
    }

    public static function representingColumn() {
        return 'empleado';
    }

    public function rules() {
        return array(
            array('idpermiso, asistencia_idasistencia', 'required'),
            array('idpermiso, asistencia_idasistencia', 'numerical', 'integerOnly'=>true),
            array('empleado, descripcion', 'length', 'max'=>45),
            array('fechaPermiso', 'safe'),
            array('empleado, fechaPermiso, descripcion', 'default', 'setOnEmpty' => true, 'value' => null),
            array('idpermiso, empleado, fechaPermiso, descripcion, asistencia_idasistencia', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'asistenciaIdasistencia' => array(self::BELONGS_TO, 'Asistencia', 'asistencia_idasistencia'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'idpermiso' => Yii::t('app', 'Idpermiso'),
                'empleado' => Yii::t('app', 'Empleado'),
                'fechaPermiso' => Yii::t('app', 'Fecha Permiso'),
                'descripcion' => Yii::t('app', 'Descripcion'),
                'asistencia_idasistencia' => Yii::t('app', 'Asistencia Idasistencia'),
                'asistenciaIdasistencia' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('idpermiso', $this->idpermiso);
        $criteria->compare('empleado', $this->empleado, true);
        $criteria->compare('fechaPermiso', $this->fechaPermiso, true);
        $criteria->compare('descripcion', $this->descripcion, true);
        $criteria->compare('asistencia_idasistencia', $this->asistencia_idasistencia);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}