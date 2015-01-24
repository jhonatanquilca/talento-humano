<?php

Yii::import('personal.models._base.BaseAtrazos');

class Atrazos extends BaseAtrazos
{
    /**
     * @return Atrazos
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Atrazos|Atrazoses', $n);
    }

}