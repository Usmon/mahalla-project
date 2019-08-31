<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objects_in_territory".
 *
 * @property int $id
 * @property int $neighborhood_id
 * @property int $guzar
 * @property int $stores
 * @property int $weddings
 * @property int $catering
 * @property int $internet_club
 * @property int $training_center
 * @property int $hospital
 * @property int $family_polyclinic
 * @property int $farms
 * @property int $playground
 * @property int $sports_ground
 * @property int $mosques
 * @property int $other_religious
 * @property int $pilgrim
 * @property int $cemeteries
 * @property int $markets
 * @property int $bread_production
 * @property int $beauty_salon
 * @property int $mastering
 * @property int $sights
 * @property int $libraries
 * @property int $pharmacy
 * @property int $bathrooms
 *
 * @property Neighborhoods $neighborhood
 */
class ObjectsInTerritory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'objects_in_territory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['neighborhood_id', 'guzar', 'stores', 'weddings', 'catering', 'internet_club', 'training_center', 'hospital', 'family_polyclinic', 'farms', 'playground', 'sports_ground', 'mosques', 'other_religious', 'pilgrim', 'cemeteries', 'markets', 'bread_production', 'beauty_salon', 'mastering', 'sights', 'libraries', 'pharmacy', 'bathrooms'], 'required'],
            [['neighborhood_id', 'guzar', 'stores', 'weddings', 'catering', 'internet_club', 'training_center', 'hospital', 'family_polyclinic', 'farms', 'playground', 'sports_ground', 'mosques', 'other_religious', 'pilgrim', 'cemeteries', 'markets', 'bread_production', 'beauty_salon', 'mastering', 'sights', 'libraries', 'pharmacy', 'bathrooms'], 'integer'],
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
            'guzar' => 'Guzar',
            'stores' => 'Stores',
            'weddings' => 'Weddings',
            'catering' => 'Catering',
            'internet_club' => 'Internet Club',
            'training_center' => 'Training Center',
            'hospital' => 'Hospital',
            'family_polyclinic' => 'Family Polyclinic',
            'farms' => 'Farms',
            'playground' => 'Playground',
            'sports_ground' => 'Sports Ground',
            'mosques' => 'Mosques',
            'other_religious' => 'Other Religious',
            'pilgrim' => 'Pilgrim',
            'cemeteries' => 'Cemeteries',
            'markets' => 'Markets',
            'bread_production' => 'Bread Production',
            'beauty_salon' => 'Beauty Salon',
            'mastering' => 'Mastering',
            'sights' => 'Sights',
            'libraries' => 'Libraries',
            'pharmacy' => 'Pharmacy',
            'bathrooms' => 'Bathrooms',
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
