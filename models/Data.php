<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property string $id
 * @property string $timestamp
 * @property string $coordinates
 * @property string $ns_1
 * @property int $fday
 * @property int $age
 * @property string $sex
 * @property string $prevd
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'coordinates', 'ns_1', 'fday', 'age', 'sex', 'prevd'], 'required'],
            [['timestamp'], 'safe'],
            [['fday', 'age'], 'integer'],
            [['sex'], 'string'],
            [['id', 'coordinates', 'ns_1'], 'string', 'max' => 255],
            [['prevd'], 'string', 'max' => 5],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID DBD',
            'timestamp' => 'Timestamp',
            'coordinates' => 'Coordinates',
            'ns_1' => 'Ns 1',
            'fday' => 'Fday',
            'age' => 'Age',
            'sex' => 'Sex',
            'prevd' => 'Prevd',
        ];
    }
}
