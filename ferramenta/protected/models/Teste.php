<?php

/**
 * This is the model class for table "TESTE".
 *
 * The followings are the available columns in table 'TESTE':
 * @property double $COD_TESTE
 * @property string $ESPECIFICACAO
 * @property string $CONDICAOPARAREQUISITOATENDIDO
 * @property string $CONDICAOPARAREQUISITONAOATENDI
 * @property double $COD_REQ
 * @property string $STATUS
 * @property double $ORDEM
 *
 * The followings are the available model relations:
 * @property PASSOS[] $pASSOSes
 * @property REQUISITO $cODREQ
 * @property TESTESREALIZADOS[] $tESTESREALIZADOSes
 */
class Teste extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Teste the static model class
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
		return 'TESTE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ESPECIFICACAO', 'required'),
			array('COD_REQ, ORDEM', 'numerical'),
			array('ESPECIFICACAO', 'length', 'max'=>1000),
			array('CONDICAOPARAREQUISITOATENDIDO, CONDICAOPARAREQUISITONAOATENDI', 'length', 'max'=>1500),
			array('STATUS', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('COD_TESTE, ESPECIFICACAO, CONDICAOPARAREQUISITOATENDIDO, CONDICAOPARAREQUISITONAOATENDI, COD_REQ, STATUS, ORDEM', 'safe', 'on'=>'search'),
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
			'pASSOSes' => array(self::HAS_MANY, 'PASSOS', 'COD_TESTE'),
			'cODREQ' => array(self::BELONGS_TO, 'REQUISITO', 'COD_REQ'),
			'tESTESREALIZADOSes' => array(self::HAS_MANY, 'TESTESREALIZADOS', 'COD_TESTE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COD_TESTE' => 'Cod Teste',
			'ESPECIFICACAO' => 'Especificacao',
			'CONDICAOPARAREQUISITOATENDIDO' => 'Condicaopararequisitoatendido',
			'CONDICAOPARAREQUISITONAOATENDI' => 'Condicaopararequisitonaoatendi',
			'COD_REQ' => 'Cod Req',
			'STATUS' => 'Status',
			'ORDEM' => 'Ordem',
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

		$criteria->compare('COD_TESTE',$this->COD_TESTE);
		$criteria->compare('ESPECIFICACAO',$this->ESPECIFICACAO,true);
		$criteria->compare('CONDICAOPARAREQUISITOATENDIDO',$this->CONDICAOPARAREQUISITOATENDIDO,true);
		$criteria->compare('CONDICAOPARAREQUISITONAOATENDI',$this->CONDICAOPARAREQUISITONAOATENDI,true);
		$criteria->compare('COD_REQ',$this->COD_REQ);
		$criteria->compare('STATUS',$this->STATUS,true);
		$criteria->compare('ORDEM',$this->ORDEM);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}