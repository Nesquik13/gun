<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }
    public function rules()
    {
            return [
              [['name', 'surname', 'phone', 'email'], 'required'],
              ['email', 'email']
            ];
    }
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'phone' => 'Номер телефона',
            'email' => 'Email'
        ];
    }
}
