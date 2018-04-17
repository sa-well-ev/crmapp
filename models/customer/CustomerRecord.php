<?php
/**
 * Created by PhpStorm.
 * User: didev
 * Date: 17.04.2018
 * Time: 20:57
 */

namespace app\models\customer;


use yii\db\ActiveRecord;

class CustomerRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'customer';
    }
    public function rules()
    {
        return [
            ['id', 'number'],
            ['name', 'required'],
            ['name', 'string', 'max' => 256],
            ['birth_date', 'date', 'format' => 'Y-m-d'],
            ['notes', 'safe'],
        ];
    }
}