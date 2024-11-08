<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "audioperef".
 *
 * @property int $id
 * @property string $name
 * @property string $brand
 * @property string $type
 * @property string $model
 * @property string $color
 * @property int $guarantee
 * @property string $country_manufacturer
 * @property string $description
 * @property float $price
 */
class Audioperef extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audioperef';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'brand', 'type', 'model', 'color', 'guarantee', 'country_manufacturer', 'description', 'price'], 'required'],
            [['guarantee'], 'integer'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['name', 'brand', 'type', 'model', 'color', 'country_manufacturer'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'brand' => 'Производитель',
            'type' => 'Тип',
            'model' => 'Модель',
            'color' => 'Цвет',
            'guarantee' => 'Гарантия(месяцев)',
            'country_manufacturer' => 'Страна-производитель',
            'description' => 'Описание',
            'price' => 'Цена',
        ];
    }
}
