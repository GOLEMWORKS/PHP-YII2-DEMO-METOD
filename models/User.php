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
            [['login', 'password', 'fio', 'phone', 'email'], 'required'],
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
            'login' => 'Login',
            'password' => 'Password',
            'fio' => 'Fio',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[Zayas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZayas()
    {
        return $this->hasMany(Zaya::class, ['id_user' => 'id']);
    }
}
