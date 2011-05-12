<?php

/**
 * This is the model class for table "TESTES_REALIZADOS".
 *
 * The followings are the available columns in table 'TESTES_REALIZADOS':
 * @property string $TEMPOTOTAL
 * @property string $CODICAO_ATENTIDO
 * @property string $ALTERACAO_FONTE
 * @property string $NAO_CONFORMIDADE
 * @property double $COD_TESTE
 * @property double $MATRICULA
 * @property string $RESGISTRARDUVIDAS
 * @property string $RESULTADO_FINAL
 * @property double $COD_REALIZACAO
 * @property double $COD_SOFTWARE
 *
 * The followings are the available model relations:
 * @property TESTE $cODTESTE
 * @property SOFTWARE $cODSOFTWARE
 * @property AVALIADOR $mATRICULA
 */
class TestesRealizados extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return TestesRealizados the static model class
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
		return 'TESTES_REALIZADOS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RESULTADO_FINAL, COD_SOFTWARE', 'required'),
			array('COD_TESTE, MATRICULA, COD_SOFTWARE', 'numerical'),
			array('TEMPOTOTAL', 'length', 'max'=>6),
			array('CODICAO_ATENTIDO', 'length', 'max'=>1500),
			array('ALTERACAO_FONTE', 'length', 'max'=>150),
			array('NAO_CONFORMIDADE, RESGISTRARDUVIDAS', 'length', 'max'=>500),
			array('RESULTADO_FINAL', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('TEMPOTOTAL, CODICAO_ATENTIDO, ALTERACAO_FONTE, NAO_CONFORMIDADE, COD_TESTE, MATRICULA, RESGISTRARDUVIDAS, RESULTADO_FINAL, COD_REALIZACAO, COD_SOFTWARE', 'safe', 'on'=>'search'),
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
			'cODTESTE' => array(self::BELONGS_TO, 'TESTE', 'COD_TESTE'),
			'cODSOFTWARE' => array(self::BELONGS_TO, 'SOFTWARE', 'COD_SOFTWARE'),
			'mATRICULA' => array(self::BELONGS_TO, 'AVALIADOR', 'MATRICULA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TEMPOTOTAL' => 'Tempototal',
			'CODICAO_ATENTIDO' => 'Codicao Atentido',
			'ALTERACAO_FONTE' => 'Alteracao Fonte',
			'NAO_CONFORMIDADE' => 'Nao Conformidade',
			'COD_TESTE' => 'Cod Teste',
			'MATRICULA' => 'Matricula',
			'RESGISTRARDUVIDAS' => 'Resgistrarduvidas',
			'RESULTADO_FINAL' => 'Resultado Final',
			'COD_REALIZACAO' => 'Cod Realizacao',
			'COD_SOFTWARE' => 'Cod Software',
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

		$criteria->compare('TEMPOTOTAL',$this->TEMPOTOTAL,true);
		$criteria->compare('CODICAO_ATENTIDO',$this->CODICAO_ATENTIDO,true);
		$criteria->compare('ALTERACAO_FONTE',$this->ALTERACAO_FONTE,true);
		$criteria->compare('NAO_CONFORMIDADE',$this->NAO_CONFORMIDADE,true);
		$criteria->compare('COD_TESTE',$this->COD_TESTE);
		$criteria->compare('MATRICULA',$this->MATRICULA);
		$criteria->compare('RESGISTRARDUVIDAS',$this->RESGISTRARDUVIDAS,true);
		$criteria->compare('RESULTADO_FINAL',$this->RESULTADO_FINAL,true);
		$criteria->compare('COD_REALIZACAO',$this->COD_REALIZACAO);
		$criteria->compare('COD_SOFTWARE',$this->COD_SOFTWARE);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}