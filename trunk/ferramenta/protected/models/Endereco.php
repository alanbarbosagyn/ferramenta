<?php

/**
 * This is the model class for table "ENDERECO".
 *
 * The followings are the available columns in table 'ENDERECO':
 * @property double $CEP
 * @property string $LOGRADOURO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $UF
 * @property double $NUMERO
 * @property double $CNPJ
 *
 * The followings are the available model relations:
 * @property EMPRESA $cNPJ
 */
class Endereco extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Endereco the static model class
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
		return 'ENDERECO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('LOGRADOURO, BAIRRO, CIDADE, UF, NUMERO', 'required'),
			array('NUMERO, CNPJ', 'numerical'),
			array('LOGRADOURO', 'length', 'max'=>200),
			array('BAIRRO, CIDADE', 'length', 'max'=>50),
			array('UF', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CEP, LOGRADOURO, BAIRRO, CIDADE, UF, NUMERO, CNPJ', 'safe', 'on'=>'search'),
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
			'cNPJ' => array(self::BELONGS_TO, 'EMPRESA', 'CNPJ'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CEP' => 'Cep',
			'LOGRADOURO' => 'Logradouro',
			'BAIRRO' => 'Bairro',
			'CIDADE' => 'Cidade',
			'UF' => 'Uf',
			'NUMERO' => 'Numero',
			'CNPJ' => 'Cnpj',
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

		$criteria->compare('CEP',$this->CEP);
		$criteria->compare('LOGRADOURO',$this->LOGRADOURO,true);
		$criteria->compare('BAIRRO',$this->BAIRRO,true);
		$criteria->compare('CIDADE',$this->CIDADE,true);
		$criteria->compare('UF',$this->UF,true);
		$criteria->compare('NUMERO',$this->NUMERO);
		$criteria->compare('CNPJ',$this->CNPJ);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}