<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gps".
 *
 * @property int $id
 * @property string $date
 * @property float $lat
 * @property float $lng
 * @property float $hgt
 * @property string $coment
 */
class Gps extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gps';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['lat', 'lng'], 'required'],
            [['lat', 'lng','hgt'], 'number'],
            [['coment'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'hgt' => 'Hgt',
            'coment' => 'Coment',
        ];
    }
}
