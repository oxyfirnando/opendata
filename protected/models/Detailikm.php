<?php

/**
 * This is the model class for table "detailikm".
 *
 * The followings are the available columns in table 'detailikm':
 * @property integer $ID_IKM
 * @property string $ID_KBLI
 * @property integer $ID_KELURAHAN
 * @property integer $ID_BENTUK_USAHA
 * @property string $NAMA_PERUSAHAAN
 * @property string $PIMPINAN
 * @property string $ALAMAT
 * @property string $TELP
 * @property string $TAHUN_IZIN
 * @property string $JENIS_PRODUK
 * @property integer $TENAGA_KERJA_P
 * @property integer $TENAGA_KERJA_W
 * @property double $NILAI_INVESTASI
 * @property integer $KAPASITAS_PRODUKSI
 * @property string $SATUAN
 * @property integer $NILAI_PRODUKSI
 * @property integer $NILAI_BAHAN_BAKU
 * @property integer $STATUS
 *
 * The followings are the available model relations:
 * @property Kbli $iDKBLI
 * @property Kelurahan $iDKELURAHAN
 * @property Bentukusaha $iDBENTUKUSAHA
 */
class Detailikm extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'detailikm';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('ID_IKM, ID_KBLI, ID_KELURAHAN, NAMA_PERUSAHAAN, PIMPINAN, ALAMAT, TELP, JENIS_PRODUK, TENAGA_KERJA_P, TENAGA_KERJA_W, NILAI_INVESTASI, NILAI_PRODUKSI, NILAI_BAHAN_BAKU', 'required'),
            array('ID_IKM, ID_KELURAHAN, ID_BENTUK_USAHA, TENAGA_KERJA_P, TENAGA_KERJA_W, KAPASITAS_PRODUKSI, NILAI_PRODUKSI, NILAI_BAHAN_BAKU, STATUS', 'numerical', 'integerOnly' => true),
            array('NILAI_INVESTASI', 'numerical'),
            array('ID_KBLI, PIMPINAN, JENIS_PRODUK, SATUAN', 'length', 'max' => 100),
            array('NAMA_PERUSAHAAN', 'length', 'max' => 200),
            array('TELP', 'length', 'max' => 20),
            array('TAHUN_IZIN', 'length', 'max' => 4),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('ID_IKM, ID_KBLI, ID_KELURAHAN, ID_BENTUK_USAHA, NAMA_PERUSAHAAN, PIMPINAN, ALAMAT, TELP, TAHUN_IZIN, JENIS_PRODUK, TENAGA_KERJA_P, TENAGA_KERJA_W, NILAI_INVESTASI, KAPASITAS_PRODUKSI, SATUAN, NILAI_PRODUKSI, NILAI_BAHAN_BAKU, STATUS', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'iDKBLI' => array(self::BELONGS_TO, 'Kbli', 'ID_KBLI'),
            'iDKELURAHAN' => array(self::BELONGS_TO, 'Kelurahan', 'ID_KELURAHAN'),
            'iDBENTUKUSAHA' => array(self::BELONGS_TO, 'Bentukusaha', 'ID_BENTUK_USAHA'),
            'sTATUS' => array(self::BELONGS_TO, 'status', 'ID'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'ID_IKM' => 'Id Ikm',
            'ID_KBLI' => 'NO. KBLI',
            'ID_KELURAHAN' => 'ID Kelurahan',
            'ID_BENTUK_USAHA' => 'ID Bentuk Usaha',
            'NAMA_PERUSAHAAN' => 'Nama Perusahaan',
            'PIMPINAN' => 'Nama Pimpinan',
            'ALAMAT' => 'Alamat',
            'TELP' => 'Telp',
            'TAHUN_IZIN' => 'Tahun Izin',
            'JENIS_PRODUK' => 'Jenis Produk',
            'TENAGA_KERJA_P' => 'Tenaga Kerja P',
            'TENAGA_KERJA_W' => 'Tenaga Kerja W',
            'NILAI_INVESTASI' => 'Nilai Investasi',
            'KAPASITAS_PRODUKSI' => 'Kapasitas Produksi',
            'SATUAN' => 'Satuan',
            'NILAI_PRODUKSI' => 'Nilai Produksi',
            'NILAI_BAHAN_BAKU' => 'Nilai Bahan Baku',
            'STATUS' => 'Status',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('ID_IKM', $this->ID_IKM);
        $criteria->compare('ID_KBLI', $this->ID_KBLI, true);
        $criteria->compare('ID_KELURAHAN', $this->ID_KELURAHAN);
        $criteria->compare('ID_BENTUK_USAHA', $this->ID_BENTUK_USAHA);
        $criteria->compare('NAMA_PERUSAHAAN', $this->NAMA_PERUSAHAAN, true);
        $criteria->compare('PIMPINAN', $this->PIMPINAN, true);
        $criteria->compare('ALAMAT', $this->ALAMAT, true);
        $criteria->compare('TELP', $this->TELP, true);
        $criteria->compare('TAHUN_IZIN', $this->TAHUN_IZIN, true);
        $criteria->compare('JENIS_PRODUK', $this->JENIS_PRODUK, true);
        $criteria->compare('TENAGA_KERJA_P', $this->TENAGA_KERJA_P);
        $criteria->compare('TENAGA_KERJA_W', $this->TENAGA_KERJA_W);
        $criteria->compare('NILAI_INVESTASI', $this->NILAI_INVESTASI);
        $criteria->compare('KAPASITAS_PRODUKSI', $this->KAPASITAS_PRODUKSI);
        $criteria->compare('SATUAN', $this->SATUAN, true);
        $criteria->compare('NILAI_PRODUKSI', $this->NILAI_PRODUKSI);
        $criteria->compare('NILAI_BAHAN_BAKU', $this->NILAI_BAHAN_BAKU);
        $criteria->compare('STATUS', $this->STATUS);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Detailikm the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
