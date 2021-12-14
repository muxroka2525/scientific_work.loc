<?php

namespace backend\models;

use app\models\User;
use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $login Логин
 * @property string|null $password Пароль
 * @property string|null $fio ФИО
 * @property string|null $phone Телефон
 * @property int|null $type Тип
 * @property string|null $date_cr Дата создания
 */
class Users extends User
{
    
}
