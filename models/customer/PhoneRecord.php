<?php
/**
 * Created by PhpStorm.
 * User: didev
 * Date: 17.04.2018
 * Time: 21:04
 */

namespace app\models\customer;


use yii\db\ActiveRecord;

class PhoneRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'phone';
    }
    public function rules()
    {
        return [
            ['customer_id', 'number'],
            ['number', 'string'],
            [['customer_id', 'number'], 'required'],
        ];
    }
}