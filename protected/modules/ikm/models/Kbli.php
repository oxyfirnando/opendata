<?php

/**
 * This is the model class for table "kbli".
 *
 * The followings are the available columns in table 'kbli':
 * @property string $ID_KBLI
 * @property integer $ID_DIREKTORIPOTENSI
 * @property string $KBLI
 *
 * The followings are the available model relations:
 * @property Detailikm[] $detailikms
 * @property Direktoripotensi $iDDIREKTORIPOTENSI
 */
class Kbli extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kbli';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_KBLI, ID_DIREKTORIPOTENSI, KBLI', 'required'),
			array('ID_DIREKTORIPOTENSI', 'numerical', 'integerOnly'=>true),
			array('ID_KBLI', 'length', 'max'=>100),
			array('KBLI', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_KBLI, ID_DIREKTORIPOTENSI, KBLI', 'safe', 'on'=>'search'),
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
			'detailikms' => array(self::HAS_MANY, 'Detailikm', 'ID_KBLI'),
			'iDDIREKTORIPOTENSI' => array(self::BELONGS_TO, 'Direktoripotensi', 'ID_DIREKTORIPOTENSI'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_KBLI' => 'Id Kbli',
			'ID_DIREKTORIPOTENSI' => 'Id Direktoripotensi',
			'KBLI' => 'Kbli',
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

		$criteria->compare('ID_KBLI',$this->ID_KBLI,true);
		$criteria->compare('ID_DIREKTORIPOTENSI',$this->ID_DIREKTORIPOTENSI);
		$criteria->compare('KBLI',$this->KBLI,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kbli the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
