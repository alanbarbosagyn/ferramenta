<?php

/**
 * This is the model class for table "RELACAO_E_SOFTWARE".
 *
 * The followings are the available columns in table 'RELACAO_E_SOFTWARE':
 * @property double $COD_EQUIPAMENTO
 * @property double $NUM_LAUDO
 */
class RelacaoSoftware extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return RelacaoSoftware the static model class
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
		return 'RELACAO_E_SOFTWARE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('COD_EQUIPAMENTO, NUM_LAUDO', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COD_EQUIPAMENTO' => 'Cod Equipamento',
			'NUM_LAUDO' => 'Num Laudo',
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
		$criteria->compare('NUM_LAUDO',$this->NUM_LAUDO);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}