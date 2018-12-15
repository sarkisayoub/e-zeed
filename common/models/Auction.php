<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "auction".
 *
 * @property int $id
 * @property int $product_id
 * @property int $user_id
 * @property double $price
 * @property string $created_date
 */
class Auction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'user_id', 'price'], 'required'],
            [['product_id', 'user_id'], 'integer'],
            [['price'], 'number'],
            [['created_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'user_id' => 'User ID',
            'price' => 'Price',
            'created_date' => 'Created Date',
        ];
    }
}
