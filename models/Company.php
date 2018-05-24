<?php

namespace app\models;


use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property int $laptops_id
 * @property string $location
 * @property int $buyer_id
 * @property string $phone_no
 *
 * @property Buyer $buyer
 * @property Laptops $laptops
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['laptops_id', 'location', 'buyer_id', 'phone_no'], 'required'],
            [['laptops_id', 'buyer_id'], 'integer'],
            [['location'], 'string'],
            [['phone_no'], 'string', 'max' => 255],
            [['buyer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Buyer::className(), 'targetAttribute' => ['buyer_id' => 'id']],
            [['laptops_id'], 'exist', 'skipOnError' => true, 'targetClass' => Laptops::className(),'targetAttribute' => ['laptops_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'laptops_id' => 'Laptops ID',
            'location' => 'Location',
            'buyer_id' => 'Buyer ID',
            'phone_no' => 'Phone No',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuyer()
    {
        return $this->hasOne(Buyer::className(), ['id' => 'buyer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLaptops()
    {
        return $this->hasOne(Laptops::className(), ['id' => 'laptops_id']);
    }
     public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
