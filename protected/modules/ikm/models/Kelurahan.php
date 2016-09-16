<?php

/**
 * This is the model class for table "kelurahan".
 *
 * The followings are the available columns in table 'kelurahan':
 * @property integer $ID_KELURAHAN
 * @property integer $ID_KECAMATAN
 * @property string $KELURAHAN
 *
 * The followings are the available model relations:
 * @property Detailikm[] $detailikms
 * @property Kecamatan $iDKECAMATAN
 */
class Kelurahan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kelurahan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_KECAMATAN, KELURAHAN', 'required'),
			array('ID_KECAMATAN', 'numerical', 'integerOnly'=>true),
			array('KELURAHAN', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_KELURAHAN, ID_KECAMATAN, KELURAHAN', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'detailikms' => array(self::HAS_MANY, 'Detailikm', 'ID_KELURAHAN'),
			'iDKECAMATAN' => array(self::BELONGS_TO, 'Kecamatan', 'ID_KECAMATAN'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_KELURAHAN' => 'Id Kelurahan',
			'ID_KECAMATAN' => 'Id Kecamatan',
			'KELURAHAN' => 'Kelurahan',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID_KELURAHAN',$this->ID_KELURAHAN);
		$criteria->compare('ID_KECAMATAN',$this->ID_KECAMATAN);
		$criteria->compare('KELURAHAN',$this->KELURAHAN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kelurahan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
