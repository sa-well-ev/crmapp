<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 17.04.2018
 * Time: 10:05
 */

namespace app\models\customer;


class Customer
{
    /** @var string */
    public $name;
    /** @var \DateTime */
    public $birth_date;
    /** @var string */
    public $notes = '';
    /** @var PhoneRecord[] */
    public $phones = [];
    public function _construct($name, $birth_date)
    {
        $this->name = $name;
        $this->birth_date = $birth_date;
    }
}