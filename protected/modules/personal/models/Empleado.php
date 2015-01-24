<?php

Yii::import('personal.models._base.BaseEmpleado');

class Empleado extends BaseEmpleado
{
    /**
     * @return Empleado
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Empleado|Empleados', $n);
    }

}