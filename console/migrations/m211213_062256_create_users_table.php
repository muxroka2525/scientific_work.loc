<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m211213_062256_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'login' => $this->string(255)->comment("Логин"),
            'password' => $this->string(255)->comment("Пароль"),
            'fio' => $this->string(255)->comment("ФИО"),
            'phone' => $this->string(255)->comment("Телефон"),
            'type' => $this->integer()->comment("Тип"),
            'date_cr' =>$this->datetime()->comment("Дата создания"),
        ]);

        $this->insert('users',array(
          'id'=>1,
          'fio'=>'Иванов Иван Иванович',
          'type'=>1,
          'date_cr'=>date('Y-m-d H:i:s'),
          'login'=>'admin',
          'password' => Yii::$app->security->generatePasswordHash('admin'),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%companies}}`
       

        $this->dropTable('{{%users}}');
    }
}
