<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $verification_token
 */
class User extends \yii\db\ActiveRecord
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
            [['login',  'password', 'fio'], 'required'],
            [['login', 'password', 'fio', 'phone'], 'string', 'max' => 255],
            // [['auth_key'], 'string', 'max' => 32],
            // [['password_reset_token'], 'unique'],
            [['login'], 'unique'],
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
            'auth_key' => 'Auth Key',
            'password' => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
        ];
    }

    public function beforeSave($insert){
        if ($this->isNewRecord) {
            $this->password = Yii::$app->security->generatePasswordHash($this->password);
            $this->auth_key = Yii::$app->getSecurity()->generateRandomString();
            $this->created_at = time();
            $this->updated_at = time();
            $this->status = 1;
            
        }
    
        return parent::beforeSave($insert);
    }
}
