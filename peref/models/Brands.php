<?php

namespace frontend\models;
use yii\db\ActiveRecord;
use Yii;

/**
 * This is the model class for table "brands".
 *
 * @property int $id
 * @property string $name
 *
 * @property Audioperefers[] $audioperefers
 * @property Otherperefers[] $otherperefers
 * @property Products[] $products
 * @property Videoperefers[] $videoperefers
 */
class Brands extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brands';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Audioperefers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAudioperefers()
    {
        return $this->hasMany(Audioperefers::class, ['brand' => 'id']);
    }

    /**
     * Gets query for [[Otherperefers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtherperefers()
    {
        return $this->hasMany(Otherperefers::class, ['brand' => 'id']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::class, ['brand' => 'id']);
    }

    public function getBarnds($id) {
        $id = (int)$id;
        return self::findOne($id);
    }
    public function getAllBrands() {
        return self::find()
            ->select([
                'id' => 'brands.id',
                'name' => 'brands.name'
            ])
            ->innerJoin(
                'products',
                'products.brands_id = brands.id'
            )
            ->groupBy([
                'brands.id', 'brands.name'
            ])
            ->orderBy(['name' => SORT_ASC])
            ->asArray()
            ->all();
    }


    /**
     * Gets query for [[Videoperefers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVideoperefers()
    {
        return $this->hasMany(Videoperefers::class, ['brand' => 'id']);
    }
}
