<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buyer".
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property string $address
 * @property string $phone_no
 */
class Buyer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buyer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'gender', 'address', 'phone_no'], 'required'],
            [['name', 'phone_no'], 'string', 'max' => 200],
            [['gender'], 'string', 'max' => 10],
            [['address'], 'string', 'max' => 500],
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
            'gender' => 'Gender',
            'address' => 'Address',
            'phone_no' => 'Phone No',
        ];
    }
}
