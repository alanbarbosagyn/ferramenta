<?php

/**
 * This is the model class for table "AVALIADOR".
 *
 * The followings are the available columns in table 'AVALIADOR':
 * @property double $MATRICULA
 * @property string $NOME_AVALIADOR
 * @property string $CURSO
 * @property string $TELEFONE
 * @property string $EMAIL
 * @property string $HORARIO_DE_TRABALHO
 * @property string $SENHA
 *
 * The followings are the available model relations:
 * @property TESTESREALIZADOS[] $tESTESREALIZADOSes
 */
class Avaliador extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Avaliador the static model class
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
		return 'AVALIADOR';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOME_AVALIADOR, EMAIL, HORARIO_DE_TRABALHO, SENHA', 'required'),
			array('NOME_AVALIADOR', 'length', 'max'=>150),
			array('CURSO, HORARIO_DE_TRABALHO', 'length', 'max'=>50),
			array('TELEFONE', 'length', 'max'=>15),
			array('EMAIL', 'length', 'max'=>120),
			array('SENHA', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('MATRICULA, NOME_AVALIADOR, CURSO, TELEFONE, EMAIL, HORARIO_DE_TRABALHO, SENHA', 'safe', 'on'=>'search'),
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
			'tESTESREALIZADOSes' => array(self::HAS_MANY, 'TESTESREALIZADOS', 'MATRICULA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'MATRICULA' => 'matricula',
			'NOME_AVALIADOR' => 'nomeAvaliador',
			'CURSO' => 'curso',
			'TELEFONE' => 'telefone',
			'EMAIL' => 'email',
			'HORARIO_DE_TRABALHO' => 'horarioDeTrabalho',
			'SENHA' => 'senha',
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

		$criteria->compare('MATRICULA',$this->MATRICULA);
		$criteria->compare('NOME_AVALIADOR',$this->NOME_AVALIADOR,true);
		$criteria->compare('CURSO',$this->CURSO,true);
		$criteria->compare('TELEFONE',$this->TELEFONE,true);
		$criteria->compare('EMAIL',$this->EMAIL,true);
		$criteria->compare('HORARIO_DE_TRABALHO',$this->HORARIO_DE_TRABALHO,true);
		$criteria->compare('SENHA',$this->SENHA,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}