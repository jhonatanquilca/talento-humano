<?php

/**
 * This is the model base class for the table "empleado".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Empleado".
 *
 * Columns in table "empleado" available as properties of the model,
 * followed by relations of table "empleado" available as properties of the model.
 *
 * @property integer $idempleado
 * @property string $nombre
 * @property string $apellido
 * @property string $direccion
 * @property string $telefono
 * @property string $correo
 * @property string $fechaIngreso
 * @property string $area
 * @property string $foto
 * @property integer $horario_idhorario
 * @property integer $horario_idhorario1
 *
 * @property Horario $horarioIdhorario1
 * @property Vacaciones[] $vacaciones
 */
abstract class BaseEmpleado extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'empleado';
    }

    public static function representingColumn() {
        return 'nombre';
    }

    public function rules() {
        return array(
            array('idempleado, horario_idhorario1', 'required'),
            array('idempleado, horario_idhorario, horario_idhorario1', 'numerical', 'integerOnly'=>true),
            array('nombre, apellido, direccion, telefono, correo, area', 'length', 'max'=>45),
            array('fechaIngreso, foto', 'safe'),
            array('nombre, apellido, direccion, telefono, correo, fechaIngreso, area, foto, horario_idhorario', 'default', 'setOnEmpty' => true, 'value' => null),
            array('idempleado, nombre, apellido, direccion, telefono, correo, fechaIngreso, area, foto, horario_idhorario, horario_idhorario1', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'horarioIdhorario1' => array(self::BELONGS_TO, 'Horario', 'horario_idhorario1'),
            'vacaciones' => array(self::HAS_MANY, 'Vacaciones', 'empleado_idempleado'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'idempleado' => Yii::t('app', 'Idempleado'),
                'nombre' => Yii::t('app', 'Nombre'),
                'apellido' => Yii::t('app', 'Apellido'),
                'direccion' => Yii::t('app', 'Direccion'),
                'telefono' => Yii::t('app', 'Telefono'),
                'correo' => Yii::t('app', 'Correo'),
                'fechaIngreso' => Yii::t('app', 'Fecha Ingreso'),
                'area' => Yii::t('app', 'Area'),
                'foto' => Yii::t('app', 'Foto'),
                'horario_idhorario' => Yii::t('app', 'Horario Idhorario'),
                'horario_idhorario1' => Yii::t('app', 'Horario Idhorario1'),
                'horarioIdhorario1' => null,
                'vacaciones' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('idempleado', $this->idempleado);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('apellido', $this->apellido, true);
        $criteria->compare('direccion', $this->direccion, true);
        $criteria->compare('telefono', $this->telefono, true);
        $criteria->compare('correo', $this->correo, true);
        $criteria->compare('fechaIngreso', $this->fechaIngreso, true);
        $criteria->compare('area', $this->area, true);
        $criteria->compare('foto', $this->foto, true);
        $criteria->compare('horario_idhorario', $this->horario_idhorario);
        $criteria->compare('horario_idhorario1', $this->horario_idhorario1);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}