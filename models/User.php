<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
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
            'name' => 'Имя пользователя',
            'surname' => 'Фамилия пользователя',
            'phone' => 'Телефон пользователя',
            'email' => 'Email пользователя'
        ];
    }
}
