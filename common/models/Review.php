<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $id
 * @property int $user_id
 * @property int $seller_id
 * @property string $description
 * @property double $stars
 * @property string $created_date
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'seller_id', 'description', 'stars'], 'required'],
            [['user_id', 'seller_id'], 'integer'],
            [['description'], 'string'],
            [['stars'], 'number'],
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
            'user_id' => 'User ID',
            'seller_id' => 'Seller ID',
            'description' => 'Description',
            'stars' => 'Stars',
            'created_date' => 'Created Date',
        ];
    }
}
