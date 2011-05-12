<?php

/**
 * This is the model class for table "BLOCO".
 *
 * The followings are the available columns in table 'BLOCO':
 * @property double $COD_BLOCO
 * @property string $DESC_BLOCO
 * @property string $OBSERVACAO
 *
 * The followings are the available model relations:
 * @property REQUISITO[] $rEQUISITOs
 */
class Bloco extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Bloco the static model class
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
		return 'BLOCO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DESC_BLOCO', 'length', 'max'=>150),
			array('OBSERVACAO', 'length', 'max'=>254),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('COD_BLOCO, DESC_BLOCO, OBSERVACAO', 'safe', 'on'=>'search'),
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
			'rEQUISITOs' => array(self::HAS_MANY, 'REQUISITO', 'COD_BLOCO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COD_BLOCO' => 'Cod Bloco',
			'DESC_BLOCO' => 'Desc Bloco',
			'OBSERVACAO' => 'Observacao',
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

		$criteria->compare('COD_BLOCO',$this->COD_BLOCO);
		$criteria->compare('DESC_BLOCO',$this->DESC_BLOCO,true);
		$criteria->compare('OBSERVACAO',$this->OBSERVACAO,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}