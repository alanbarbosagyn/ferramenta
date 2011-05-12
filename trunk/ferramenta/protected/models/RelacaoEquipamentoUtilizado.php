<?php

/**
 * This is the model class for table "RELACAO_EQUIPAMENTO_UTILIZADO".
 *
 * The followings are the available columns in table 'RELACAO_EQUIPAMENTO_UTILIZADO':
 * @property double $COD_EQUIPAMENTO
 * @property string $NUMERO
 * @property string $DESCRICAO_EQUIPAMENTO
 * @property string $MODELO
 * @property string $FABRICANTE
 * @property string $ANALISE_FUNCIONAL
 *
 * The followings are the available model relations:
 * @property SOFTWARE[] $sOFTWAREs
 */
class RelacaoEquipamentoUtilizado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return RelacaoEquipamentoUtilizado the static model class
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
		return 'RELACAO_EQUIPAMENTO_UTILIZADO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NUMERO, DESCRICAO_EQUIPAMENTO, FABRICANTE', 'required'),
			array('NUMERO, MODELO, FABRICANTE', 'length', 'max'=>20),
			array('DESCRICAO_EQUIPAMENTO', 'length', 'max'=>200),
			array('ANALISE_FUNCIONAL', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('COD_EQUIPAMENTO, NUMERO, DESCRICAO_EQUIPAMENTO, MODELO, FABRICANTE, ANALISE_FUNCIONAL', 'safe', 'on'=>'search'),
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
			'sOFTWAREs' => array(self::MANY_MANY, 'SOFTWARE', 'RELACAO_E_SOFTWARE(COD_EQUIPAMENTO, NUM_LAUDO)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COD_EQUIPAMENTO' => 'Cod Equipamento',
			'NUMERO' => 'Numero',
			'DESCRICAO_EQUIPAMENTO' => 'Descricao Equipamento',
			'MODELO' => 'Modelo',
			'FABRICANTE' => 'Fabricante',
			'ANALISE_FUNCIONAL' => 'Analise Funcional',
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

		$criteria->compare('COD_EQUIPAMENTO',$this->COD_EQUIPAMENTO);
		$criteria->compare('NUMERO',$this->NUMERO,true);
		$criteria->compare('DESCRICAO_EQUIPAMENTO',$this->DESCRICAO_EQUIPAMENTO,true);
		$criteria->compare('MODELO',$this->MODELO,true);
		$criteria->compare('FABRICANTE',$this->FABRICANTE,true);
		$criteria->compare('ANALISE_FUNCIONAL',$this->ANALISE_FUNCIONAL,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}