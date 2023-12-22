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
class Zaya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zaya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'number_auto', 'comment', 'status'], 'required'],
            [['id_user'], 'integer'],
            [['number_auto', 'comment', 'status'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::class, 'targetAttribute' => ['status' => 'name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'number_auto' => 'Number Auto',
            'comment' => 'Comment',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Status0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::class, ['name' => 'status']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
