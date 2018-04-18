<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "FitSchedule".
 *
 * @property int $idFitSchedule
 * @property int $idCategories
 * @property string $Name
 * @property string $Description
 * @property string $DatePosted
 */
class FitSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'FitSchedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCategories', 'Name', 'Description', 'DatePosted'], 'required'],
            [['idCategories'], 'integer'],
            [['Description'], 'string'],
            [['DatePosted'], 'safe'],
            [['Name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idFitSchedule' => 'Schema Nummer',
            'idCategories' => 'Schema Groep ID',
            'Name' => 'Naam',
            'Description' => 'Omschrijving',
            'DatePosted' => 'Datum',
        ];
    }
}
