<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $login
 * @property string $password
 * @property string $fio
 * @property string $phone
 * @property string $email
 *
 * @property Zaya[] $zayas
 */
class Regform extends User
{
    /**
     * {@inheritdoc}
     */
    
    public function rules()
    {
        return [
            [['login', 'password', 'fio', 'phone', 'email'], 'required', 
                'message' => 'Поле обязательно для заполнения!'],
            ['fio', 'match', 'pattern'=>'/^[А-Яа-я\s\-]{5,}$/u', 'message' => 'Только кириллица!'],
            ['login', 'unique', 'message'=>'Такой логин уже используется!'],
            [ 'phone', 'match', 'pattern'=>'/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/u', 
                'message'=>'Введите телефон в требуемом формате!'],
            ['email','email','message'=>'Введите адресс электронной почты в требуемом формате!'],
            ['password','string','length'=>[6],'message'=>'Минимум 6 символов!'],
            [['login', 'password', 'fio', 'phone', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Логин',
            'password' => 'Пароль',
            'fio' => 'ФИО',
            'phone' => 'Телефон',
            'email' => 'Почта',
        ];
    }
}

    
