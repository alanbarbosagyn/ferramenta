<?php

/**
 * This is the model class for table "APLICACOESESPECIAIS_SOFTWARE".
 *
 * The followings are the available columns in table 'APLICACOESESPECIAIS_SOFTWARE':
 * @property double $CODIGO_APL_ESP
 * @property double $NUM_LAUDO
 */
class AplicacoesEspeciaisSoftware extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return AplicacoesEspeciaisSoftware the static model class
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
		return 'APLICACOESESPECIAIS_SOFTWARE';
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
			array('CODIGO_APL_ESP, NUM_LAUDO', 'safe', 'on'=>'search'),
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
			'CODIGO_APL_ESP' => 'Codigo Apl Esp',
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

		$criteria->compare('CODIGO_APL_ESP',$this->CODIGO_APL_ESP);
		$criteria->compare('NUM_LAUDO',$this->NUM_LAUDO);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}