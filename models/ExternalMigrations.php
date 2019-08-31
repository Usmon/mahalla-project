<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "external_migrations".
 *
 * @property int $id
 * @property int $neighborhood_id
 * @property int $going_abroad_mens
 * @property int $going_abroad_womens
 * @property int $no_contact
 * @property int $emigrants_mens
 * @property int $emigrants_womens
 * @property int $deported
 * @property int $public_interview
 * @property int $employed
 * @property int $medical_exam
 * @property int $disease_count
 * @property int $lost_pass
 * @property int $renewed_pass
 * @property int $country_rus
 * @property int $country_usa
 * @property int $country_pol
 * @property int $country_eng
 *
 * @property Neighborhoods $neighborhood
 */
class ExternalMigrations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'external_migrations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['neighborhood_id', 'going_abroad_mens', 'going_abroad_womens', 'no_contact', 'emigrants_mens', 'emigrants_womens', 'deported', 'public_interview', 'employed', 'medical_exam', 'disease_count', 'lost_pass', 'renewed_pass', 'country_rus', 'country_usa', 'country_pol', 'country_eng'], 'required'],
            [['neighborhood_id', 'going_abroad_mens', 'going_abroad_womens', 'no_contact', 'emigrants_mens', 'emigrants_womens', 'deported', 'public_interview', 'employed', 'medical_exam', 'disease_count', 'lost_pass', 'renewed_pass', 'country_rus', 'country_usa', 'country_pol', 'country_eng'], 'integer'],
            [['neighborhood_id'], 'exist', 'skipOnError' => true, 'targetClass' => Neighborhoods::className(), 'targetAttribute' => ['neighborhood_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'neighborhood_id' => 'Neighborhood ID',
            'going_abroad_mens' => 'Going Abroad Mens',
            'going_abroad_womens' => 'Going Abroad Womens',
            'no_contact' => 'No Contact',
            'emigrants_mens' => 'Emigrants Mens',
            'emigrants_womens' => 'Emigrants Womens',
            'deported' => 'Deported',
            'public_interview' => 'Public Interview',
            'employed' => 'Employed',
            'medical_exam' => 'Medical Exam',
            'disease_count' => 'Disease Count',
            'lost_pass' => 'Lost Pass',
            'renewed_pass' => 'Renewed Pass',
            'country_rus' => 'Country Rus',
            'country_usa' => 'Country Usa',
            'country_pol' => 'Country Pol',
            'country_eng' => 'Country Eng',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNeighborhood()
    {
        return $this->hasOne(Neighborhoods::className(), ['id' => 'neighborhood_id']);
    }
}
