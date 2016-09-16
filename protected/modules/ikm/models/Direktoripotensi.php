<?php

/**
 * This is the model class for table "direktoripotensi".
 *
 * The followings are the available columns in table 'direktoripotensi':
 * @property integer $ID_DIREKTORIPOTENSI
 * @property string $DIREKTORIPOTENSI
 *
 * The followings are the available model relations:
 * @property Kbli[] $kblis
 */
class Direktoripotensi extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'direktoripotensi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DIREKTORIPOTENSI', 'required'),
			array('DIREKTORIPOTENSI', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_DIREKTORIPOTENSI, DIREKTORIPOTENSI', 'safe', 'on'=>'search'),
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
			'kblis' => array(self::HAS_MANY, 'Kbli', 'ID_DIREKTORIPOTENSI'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_DIREKTORIPOTENSI' => 'Id Direktoripotensi',
			'DIREKTORIPOTENSI' => 'Direktoripotensi',
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

		$criteria->compare('ID_DIREKTORIPOTENSI',$this->ID_DIREKTORIPOTENSI);
		$criteria->compare('DIREKTORIPOTENSI',$this->DIREKTORIPOTENSI,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Direktoripotensi the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
