<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'login' => $this->string()->notNull()->unique()->comment("Логин"),
            'auth_key' => $this->string(32)->notNull(),
            'password' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'fio' => $this->string(255)->comment("ФИО"),
            'phone' => $this->string(255)->comment("Телефон"),
            'type' => $this->integer()->comment("Тип"),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->insert('users',array(
            'id'=>1,
            'fio'=>'Иванов Иван Иванович',
            'type'=>1,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            'login'=>'admin',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password' => Yii::$app->security->generatePasswordHash('admin'),
          ));
    }

    public function down()
    {
        $this->dropTable('{{%users}}');
    }
}
