<?php

Yii::import('personal.models._base.BaseVacaciones');

class Vacaciones extends BaseVacaciones
{
    /**
     * @return Vacaciones
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Vacaciones|Vacaciones', $n);
    }

}