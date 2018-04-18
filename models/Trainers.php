<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Trainers".
 *
 * @property int $idTrainers
 * @property string $nameTrainer
 * @property string $emailTrainer
 * @property string $telTrainer
 * @property string $dicipline
 */
class Trainers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Trainers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nameTrainer', 'emailTrainer', 'telTrainer', 'dicipline'], 'required'],
            [['nameTrainer', 'emailTrainer', 'telTrainer', 'dicipline'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTrainers' => 'Trainer Nummer',
            'nameTrainer' => 'Naam Trainer',
            'emailTrainer' => 'Email Trainer',
            'telTrainer' => 'Tel Trainer',
            'dicipline' => 'Geeft',
        ];
    }
}
