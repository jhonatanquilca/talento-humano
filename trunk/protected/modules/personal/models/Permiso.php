<?php

Yii::import('personal.models._base.BasePermiso');

class Permiso extends BasePermiso
{
    /**
     * @return Permiso
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Permiso|Permisos', $n);
    }

}