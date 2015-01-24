<?php

Yii::import('personal.models._base.BaseSanciones');

class Sanciones extends BaseSanciones
{
    /**
     * @return Sanciones
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Sanciones|Sanciones', $n);
    }

}