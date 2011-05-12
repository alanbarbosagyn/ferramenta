<?php

/**
 * This is the model class for table "REQUISITO".
 *
 * The followings are the available columns in table 'REQUISITO':
 * @property double $COD_REQ
 * @property string $ESPECREQ
 * @property double $COD_BLOCO
 *
 * The followings are the available model relations:
 * @property ITEMREQ[] $iTEMREQs
 * @property BLOCO $cODBLOCO
 * @property TESTE[] $tESTEs
 */
class Requisito extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Requisito the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'REQUISITO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COD_BLOCO', 'numerical'),
			array('ESPECREQ', 'length', 'max'=>2000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('COD_REQ, ESPECREQ, COD_BLOCO', 'safe', 'on'=>'search'),
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
			'iTEMREQs' => array(self::HAS_MANY, 'ITEMREQ', 'COD_REQ'),
			'cODBLOCO' => array(self::BELONGS_TO, 'BLOCO', 'COD_BLOCO'),
			'tESTEs' => array(self::HAS_MANY, 'TESTE', 'COD_REQ'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COD_REQ' => 'Cod Req',
			'ESPECREQ' => 'Especreq',
			'COD_BLOCO' => 'Cod Bloco',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('COD_REQ',$this->COD_REQ);
		$criteria->compare('ESPECREQ',$this->ESPECREQ,true);
		$criteria->compare('COD_BLOCO',$this->COD_BLOCO);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}