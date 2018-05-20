<?php
/**
 * Created by PhpStorm.
 * User: Dmytro
 * Date: 20.05.2018
 * Time: 22:11
 */

namespace app\models;
use yii\base\Model;

class SignupForm extends Model{

    public $email;
    public $username;
    public $password;

    public function rules() {
        return [
            [['email', 'username', 'password'], 'required', 'message' => 'Заполните поле'],
            [['email', 'username', 'password'], 'unique', 'targetClass' => User::className(),  'message' => 'Этот логин уже занят'],
        ];
    }

    public function attributeLabels() {
        return [
            'email' => 'Почта',
            'password' => 'Пароль',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'phone' => 'Номер телефона',
        ];
    }

}