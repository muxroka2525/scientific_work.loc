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

    public function beforeSave($insert){
        if ($this->isNewRecord) {
            $this->password = Yii::$app->security->generatePasswordHash($this->password);
            $this->auth_key = Yii::$app->getSecurity()->generateRandomString();
            $this->created_at = date("Y-m-d H:i");
            $this->updated_at = date("Y-m-d H:i");
            $this->status = 1;
            
        }
    
        parent::beforeSave($insert);
    }

}
