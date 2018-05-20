<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $last_name
 * @property string $first_name
 * @property string $password
 * @property string $phone
 * @property string $auth_key
 * @property string $access_token
 * @property string $type
 * @property string $group
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'username', 'password', 'type', 'group'], 'required'],
            [['email', 'username', 'last_name', 'first_name', 'password', 'phone', 'auth_key', 'access_token', 'type', 'group'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'username' => 'Username',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'password' => 'Password',
            'phone' => 'Phone',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'type' => 'Type',
            'group' => 'Group',
        ];
    }
}
