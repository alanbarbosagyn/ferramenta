<?php

/**
 * This is the model class for table "EMPRESA".
 *
 * The followings are the available columns in table 'EMPRESA':
 * @property double $CNPJ
 * @property string $PROPRIETARIO
 * @property string $RAZAO_SOCIAL
 * @property string $TELEFONE
 * @property string $RESPONSAVELTEC
 * @property string $ASSISTENCIATEC
 * @property string $COMPLEMENTO
 * @property string $EMAIL_TEC
 * @property string $HOMEPAGE
 *
 * The followings are the available model relations:
 * @property ENDERECO[] $eNDERECOs
 * @property SOFTWARE[] $sOFTWAREs
 */
class Empresa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Empresa the static model class
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
		return 'EMPRESA';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PROPRIETARIO, RAZAO_SOCIAL, TELEFONE', 'required'),
			array('PROPRIETARIO, RAZAO_SOCIAL, ASSISTENCIATEC', 'length', 'max'=>200),
			array('TELEFONE', 'length', 'max'=>15),
			array('RESPONSAVELTEC, EMAIL_TEC', 'length', 'max'=>100),
			array('COMPLEMENTO', 'length', 'max'=>150),
			array('HOMEPAGE', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CNPJ, PROPRIETARIO, RAZAO_SOCIAL, TELEFONE, RESPONSAVELTEC, ASSISTENCIATEC, COMPLEMENTO, EMAIL_TEC, HOMEPAGE', 'safe', 'on'=>'search'),
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
			'eNDERECOs' => array(self::HAS_MANY, 'ENDERECO', 'CNPJ'),
			'sOFTWAREs' => array(self::HAS_MANY, 'SOFTWARE', 'CNPJ'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CNPJ' => 'Cnpj',
			'PROPRIETARIO' => 'Proprietario',
			'RAZAO_SOCIAL' => 'Razao Social',
			'TELEFONE' => 'Telefone',
			'RESPONSAVELTEC' => 'Responsaveltec',
			'ASSISTENCIATEC' => 'Assistenciatec',
			'COMPLEMENTO' => 'Complemento',
			'EMAIL_TEC' => 'Email Tec',
			'HOMEPAGE' => 'Homepage',
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

		$criteria->compare('CNPJ',$this->CNPJ);
		$criteria->compare('PROPRIETARIO',$this->PROPRIETARIO,true);
		$criteria->compare('RAZAO_SOCIAL',$this->RAZAO_SOCIAL,true);
		$criteria->compare('TELEFONE',$this->TELEFONE,true);
		$criteria->compare('RESPONSAVELTEC',$this->RESPONSAVELTEC,true);
		$criteria->compare('ASSISTENCIATEC',$this->ASSISTENCIATEC,true);
		$criteria->compare('COMPLEMENTO',$this->COMPLEMENTO,true);
		$criteria->compare('EMAIL_TEC',$this->EMAIL_TEC,true);
		$criteria->compare('HOMEPAGE',$this->HOMEPAGE,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}