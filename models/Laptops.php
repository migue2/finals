<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "laptops".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $amount
 */
class Laptops extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laptops';
    }

  /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
          [['name', 'description', 'Amount'], 'required'],
            [['name', 'description', 'Amount'], 'string', 'max' => 255],
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
            'description' => 'Description',
            'Amount' => 'Amount',
        ];
    }

}
