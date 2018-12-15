<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property double $min_price
 * @property string $image
 * @property string $description
 * @property int $category_id
 * @property string $start_date
 * @property string $duration
 * @property int $confirm_due_date
 * @property int $status
 * @property string $created_date
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'min_price', 'image', 'description', 'category_id', 'start_date', 'duration', 'confirm_due_date', 'status'], 'required'],
            [['user_id', 'category_id', 'confirm_due_date', 'status'], 'integer'],
            [['min_price'], 'number'],
            [['description'], 'string'],
            [['start_date', 'created_date'], 'safe'],
            [['name'], 'string', 'max' => 256],
            [['image'], 'string', 'max' => 64],
            [['duration'], 'string', 'max' => 16],
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
            'name' => 'Name',
            'min_price' => 'Min Price',
            'image' => 'Image',
            'description' => 'Description',
            'category_id' => 'Category ID',
            'start_date' => 'Start Date',
            'duration' => 'Duration',
            'confirm_due_date' => 'Confirm Due Date',
            'status' => 'Status',
            'created_date' => 'Created Date',
        ];
    }
	
	public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
