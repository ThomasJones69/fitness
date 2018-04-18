<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Accounts".
 *
 * @property int $idAccount
 * @property string $email
 * @property string $Password
 * @property string $FirstName
 * @property string $LastName
 * @property string $Address
 * @property string $City
 * @property int $Postcode
 * @property string $Telephone
 */
class Accounts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Accounts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'Password', 'FirstName', 'LastName', 'Address', 'City', 'Postcode', 'Telephone'], 'required'],
            [['Postcode'], 'integer'],
            [['email', 'Password', 'FirstName', 'LastName', 'Address', 'City', 'Telephone'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAccount' => 'Account Nummer',
            'email' => 'Email',
            'Password' => 'Wachtwoord',
            'FirstName' => 'Voornaam',
            'LastName' => 'Achternaam',
            'Address' => 'Adres',
            'City' => 'Stad',
            'Postcode' => 'Postcode',
            'Telephone' => 'Telefoon Nummer',
        ];
    }
}
