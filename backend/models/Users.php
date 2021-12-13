<?php

namespace backend\models;

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
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type'], 'default', 'value' => null],
            [['type'], 'integer'],
            [['date_cr'], 'safe'],
            [['login', 'password', 'fio', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'fio' => 'Fio',
            'phone' => 'Phone',
            'type' => 'Type',
            'date_cr' => 'Date Cr',
        ];
    }
}
