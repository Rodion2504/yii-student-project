<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property int $id
 * @property string $surname
 * @property string $name
 * @property string $middlename
 * @property string $birthday
 * @property string $phonenumber
 * @property string $address
 * @property int $experience
 * @property string $passport
 * @property float $salary
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'middlename', 'birthday', 'phonenumber', 'address', 'experience', 'passport', 'salary'], 'required'],
            [['birthday'], 'safe'],
            [['experience'], 'integer'],
            [['salary'], 'number'],
            [['surname', 'name', 'middlename', 'phonenumber', 'address', 'passport'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'middlename' => 'Отчество',
            'birthday' => 'День рожденья',
            'phonenumber' => 'Номер телефона',
            'address' => 'Адрес',
            'experience' => 'Стаж',
            'passport' => 'Паспортные данные',
            'salary' => 'Зарплата',
        ];
    }
}
