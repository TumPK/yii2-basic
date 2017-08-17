<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for collection "lecturer".
 *
 * @property \MongoDB\BSON\ObjectID|string $_id
 * @property mixed $name
 * @property mixed $dob
 * @property mixed $gender
 * @property mixed $degree
 * @property mixed $address
 * @property mixed $email
 * @property mixed $phone_number
 */
class Lecturer extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['Training', 'lecturer'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'name',
            'dob',
            'gender',
            'degree',
            'address',
            'email',
            'phone_number',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'dob', 'gender', 'degree', 'address', 'email', 'phone_number'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'name' => 'Name',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'degree' => 'Degree',
            'address' => 'Address',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
        ];
    }
}
