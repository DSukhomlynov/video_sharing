<?php

use yii\db\Migration;

/**
 * Class m200518_190045_user_table
 */
class m200518_190045_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable(
            '{{%user}}',
            [
                'id' => $this->primaryKey(),
                'email' => $this->string(45)->notNull(),
                'username' => $this->string(45)->notNull(),
                'last_name' => $this->string(45)->Null(),
                'first_name' => $this->string(45)->Null(),
                'password' => $this->string(45)->notNull(),
                'phone' => $this->string(45)->Null(),
                'auth_key' => $this->string(45)->Null(),
                'access_token' => $this->string(45)->Null(),
                'type' => $this->string(45)->notNull(),
                'group' => $this->string(45)->notNull(),
            ],
            $tableOptions
        );

        $this->insert('user', [
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'last_name' => 'admin',
            'first_name' => 'admin',
            'password' => '21232f297a57a5a743894a0e4a801fc3',
            'phone' => '+380957364593',
            'type' => 'site',
            'group' => 'admin'
        ]);

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}