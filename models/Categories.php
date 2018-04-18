<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Categories".
 *
 * @property int $idCategories
 * @property string $Name
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCategories' => 'Id Categories',
            'Name' => 'Name',
        ];
    }
}
