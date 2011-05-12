<?php

/**
 * This is the model class for table "ITEM_REQ".
 *
 * The followings are the available columns in table 'ITEM_REQ':
 * @property double $NUM_ITEM
 * @property string $ESPEC_ITEM
 * @property double $COD_REQ
 *
 * The followings are the available model relations:
 * @property REQUISITO $cODREQ
 */
class ItemReq extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return ItemReq the static model class
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
		return 'ITEM_REQ';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ESPEC_ITEM', 'length', 'max'=>2000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NUM_ITEM, ESPEC_ITEM, COD_REQ', 'safe', 'on'=>'search'),
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
			'cODREQ' => array(self::BELONGS_TO, 'REQUISITO', 'COD_REQ'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NUM_ITEM' => 'Num Item',
			'ESPEC_ITEM' => 'Espec Item',
			'COD_REQ' => 'Cod Req',
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

		$criteria->compare('NUM_ITEM',$this->NUM_ITEM);
		$criteria->compare('ESPEC_ITEM',$this->ESPEC_ITEM,true);
		$criteria->compare('COD_REQ',$this->COD_REQ);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}