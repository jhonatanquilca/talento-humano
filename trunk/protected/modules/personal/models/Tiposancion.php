<?php

Yii::import('personal.models._base.BaseTiposancion');

class Tiposancion extends BaseTiposancion
{
    /**
     * @return Tiposancion
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Tiposancion|Tiposancions', $n);
    }

}