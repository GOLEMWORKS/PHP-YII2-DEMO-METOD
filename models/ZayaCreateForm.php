<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zaya".
 *
 * @property int $id
 * @property int $id_user
 * @property string $number_auto
 * @property string $comment
 * @property string $status
 *
 * @property Status $status0
 * @property User $user
 */
class ZayaCreateForm extends Zaya
{
    public function rules()
    {
        return [
            [['id_user', 'number_auto', 'comment', 'status'], 'required'],
            [['id_user'], 'integer'],
            [['number_auto', 'comment', 'status'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
            //[['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::class, 'targetAttribute' => ['status' => 'name']],
        ];
    }
}
