<?php

namespace frontend\models;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property int $brand
 * @property string $type
 * @property string $color
 * @property int $guarantee
 * @property string $country_manufacturer
 * @property string $image
 * @property string $description
 * @property float $price
 * @property float $price_old
 *
 * @property Brands $brands
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'brand', 'type', 'color', 'guarantee', 'country_manufacturer', 'image', 'description', 'price', 'price_old'], 'required'],
            [['brand', 'guarantee', 'counts'], 'integer'],
            [['description'], 'string'],
            [['price', 'price_old'], 'number'],
            [['name', 'type', 'color', 'country_manufacturer', 'image'], 'string', 'max' => 50],
            [['brand'], 'exist', 'skipOnError' => true, 'targetClass' => Brands::class, 'targetAttribute' => ['brand' => 'id']],
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
            'brand' => 'Бренд',
            'type' => 'Тип',
            'color' => 'Цвет',
            'guarantee' => 'Гарантия',
            'country_manufacturer' => 'Страна производитель',
            'image' => 'Картинка',
            'description' => 'Описание',
            'price' => 'Цена',
            'price_old' => 'Старая цена',
            
        ];
    }

    /**
     * Gets query for [[Brand0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrands()
    {
        return $this->hasOne(Brands::class, ['id' => 'brands']);
    }
    public function getProducts($id) {
        return self::find()->where(['id' => $id])->asArray()->one();
    }
}
