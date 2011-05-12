<?php

/**
 * This is the model class for table "SOFTWARE".
 *
 * The followings are the available columns in table 'SOFTWARE':
 * @property string $NOME_COM_PROGRAMA
 * @property string $VERSAO
 * @property string $SENHA
 * @property string $IDENTIFICACAO_PRINCIPAL_ARQUIV
 * @property string $LOGIN
 * @property string $DATA_ENTRADA
 * @property string $SGBD
 * @property string $DATA_FINAL
 * @property string $QTDE_HORA_AVALIADA
 * @property string $IDENTIF_SISTEMA_PED
 * @property string $OBSERVACOES_FINAIS
 * @property string $LING_PROGR
 * @property string $IDENTIF_DOS_SISTEMAS_DE_GESTAO
 * @property double $MATRSIAPE
 * @property double $CNPJ
 * @property string $TIPO_INTEGRACAO_PAF_ECF
 * @property string $TIPO_IMPRESSAO_ITEM_CUPOM
 * @property string $MEIO_GERACAO_SINTEGRA
 * @property string $TIPO_FUNCIONAMENTO
 * @property string $TRATATAMENTO_INTERRUP_IMPRESSA
 * @property string $TIPO_DESENVOLVIMENTO
 * @property string $SISTEMA_OPERACIONAL
 * @property double $COD_TIPO_AVALIACAO
 * @property string $MD5_CONJUNTO_ARQUIVOS_EXE
 * @property string $MD5_PRINCIPAL_EXECUTAVEL
 * @property double $COD_SOFTWARE
 * @property string $GERENTE
 * @property string $NUM_LAUDO
 *
 * The followings are the available model relations:
 * @property APLICACOESESPECIAISSOFTWARE[] $aPLICACOESESPECIAISSOFTWAREs
 * @property ENVELOPE[] $eNVELOPEs
 * @property EMPRESA $cNPJ
 * @property PROFESSORRESP $mATRSIAPE
 * @property TIPOAVALIACAO $cODTIPOAVALIACAO
 * @property TESTESREALIZADOS[] $tESTESREALIZADOSes
 */
class Software extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Software the static model class
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
		return 'SOFTWARE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOME_COM_PROGRAMA, IDENTIFICACAO_PRINCIPAL_ARQUIV, DATA_ENTRADA, LING_PROGR, TIPO_INTEGRACAO_PAF_ECF, TIPO_IMPRESSAO_ITEM_CUPOM, MEIO_GERACAO_SINTEGRA, TIPO_FUNCIONAMENTO, TRATATAMENTO_INTERRUP_IMPRESSA, TIPO_DESENVOLVIMENTO, SISTEMA_OPERACIONAL', 'required'),
			array('MATRSIAPE, CNPJ, COD_TIPO_AVALIACAO', 'numerical'),
			array('NOME_COM_PROGRAMA, GERENTE', 'length', 'max'=>50),
			array('VERSAO, SENHA, IDENTIFICACAO_PRINCIPAL_ARQUIV, LOGIN, LING_PROGR, TIPO_INTEGRACAO_PAF_ECF, TIPO_IMPRESSAO_ITEM_CUPOM, MEIO_GERACAO_SINTEGRA, TIPO_FUNCIONAMENTO, TRATATAMENTO_INTERRUP_IMPRESSA, TIPO_DESENVOLVIMENTO', 'length', 'max'=>30),
			array('SGBD', 'length', 'max'=>40),
			array('QTDE_HORA_AVALIADA', 'length', 'max'=>6),
			array('IDENTIF_SISTEMA_PED, IDENTIF_DOS_SISTEMAS_DE_GESTAO', 'length', 'max'=>100),
			array('OBSERVACOES_FINAIS', 'length', 'max'=>500),
			array('SISTEMA_OPERACIONAL', 'length', 'max'=>20),
			array('MD5_CONJUNTO_ARQUIVOS_EXE', 'length', 'max'=>250),
			array('MD5_PRINCIPAL_EXECUTAVEL', 'length', 'max'=>80),
			array('NUM_LAUDO', 'length', 'max'=>10),
			array('DATA_FINAL', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NOME_COM_PROGRAMA, VERSAO, SENHA, IDENTIFICACAO_PRINCIPAL_ARQUIV, LOGIN, DATA_ENTRADA, SGBD, DATA_FINAL, QTDE_HORA_AVALIADA, IDENTIF_SISTEMA_PED, OBSERVACOES_FINAIS, LING_PROGR, IDENTIF_DOS_SISTEMAS_DE_GESTAO, MATRSIAPE, CNPJ, TIPO_INTEGRACAO_PAF_ECF, TIPO_IMPRESSAO_ITEM_CUPOM, MEIO_GERACAO_SINTEGRA, TIPO_FUNCIONAMENTO, TRATATAMENTO_INTERRUP_IMPRESSA, TIPO_DESENVOLVIMENTO, SISTEMA_OPERACIONAL, COD_TIPO_AVALIACAO, MD5_CONJUNTO_ARQUIVOS_EXE, MD5_PRINCIPAL_EXECUTAVEL, COD_SOFTWARE, GERENTE, NUM_LAUDO', 'safe', 'on'=>'search'),
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
			'aPLICACOESESPECIAISSOFTWAREs' => array(self::HAS_MANY, 'APLICACOESESPECIAISSOFTWARE', 'CODIGO_APL_ESP'),
			'eNVELOPEs' => array(self::HAS_MANY, 'ENVELOPE', 'NUM_LAUDO'),
			'cNPJ' => array(self::BELONGS_TO, 'EMPRESA', 'CNPJ'),
			'mATRSIAPE' => array(self::BELONGS_TO, 'PROFESSORRESP', 'MATRSIAPE'),
			'cODTIPOAVALIACAO' => array(self::BELONGS_TO, 'TIPOAVALIACAO', 'COD_TIPO_AVALIACAO'),
			'tESTESREALIZADOSes' => array(self::HAS_MANY, 'TESTESREALIZADOS', 'COD_SOFTWARE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NOME_COM_PROGRAMA' => 'Nome Com Programa',
			'VERSAO' => 'Versao',
			'SENHA' => 'Senha',
			'IDENTIFICACAO_PRINCIPAL_ARQUIV' => 'Identificacao Principal Arquiv',
			'LOGIN' => 'Login',
			'DATA_ENTRADA' => 'Data Entrada',
			'SGBD' => 'Sgbd',
			'DATA_FINAL' => 'Data Final',
			'QTDE_HORA_AVALIADA' => 'Qtde Hora Avaliada',
			'IDENTIF_SISTEMA_PED' => 'Identif Sistema Ped',
			'OBSERVACOES_FINAIS' => 'Observacoes Finais',
			'LING_PROGR' => 'Ling Progr',
			'IDENTIF_DOS_SISTEMAS_DE_GESTAO' => 'Identif Dos Sistemas De Gestao',
			'MATRSIAPE' => 'Matrsiape',
			'CNPJ' => 'Cnpj',
			'TIPO_INTEGRACAO_PAF_ECF' => 'Tipo Integracao Paf Ecf',
			'TIPO_IMPRESSAO_ITEM_CUPOM' => 'Tipo Impressao Item Cupom',
			'MEIO_GERACAO_SINTEGRA' => 'Meio Geracao Sintegra',
			'TIPO_FUNCIONAMENTO' => 'Tipo Funcionamento',
			'TRATATAMENTO_INTERRUP_IMPRESSA' => 'Tratatamento Interrup Impressa',
			'TIPO_DESENVOLVIMENTO' => 'Tipo Desenvolvimento',
			'SISTEMA_OPERACIONAL' => 'Sistema Operacional',
			'COD_TIPO_AVALIACAO' => 'Cod Tipo Avaliacao',
			'MD5_CONJUNTO_ARQUIVOS_EXE' => 'Md5 Conjunto Arquivos Exe',
			'MD5_PRINCIPAL_EXECUTAVEL' => 'Md5 Principal Executavel',
			'COD_SOFTWARE' => 'Cod Software',
			'GERENTE' => 'Gerente',
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

		$criteria->compare('NOME_COM_PROGRAMA',$this->NOME_COM_PROGRAMA,true);
		$criteria->compare('VERSAO',$this->VERSAO,true);
		$criteria->compare('SENHA',$this->SENHA,true);
		$criteria->compare('IDENTIFICACAO_PRINCIPAL_ARQUIV',$this->IDENTIFICACAO_PRINCIPAL_ARQUIV,true);
		$criteria->compare('LOGIN',$this->LOGIN,true);
		$criteria->compare('DATA_ENTRADA',$this->DATA_ENTRADA,true);
		$criteria->compare('SGBD',$this->SGBD,true);
		$criteria->compare('DATA_FINAL',$this->DATA_FINAL,true);
		$criteria->compare('QTDE_HORA_AVALIADA',$this->QTDE_HORA_AVALIADA,true);
		$criteria->compare('IDENTIF_SISTEMA_PED',$this->IDENTIF_SISTEMA_PED,true);
		$criteria->compare('OBSERVACOES_FINAIS',$this->OBSERVACOES_FINAIS,true);
		$criteria->compare('LING_PROGR',$this->LING_PROGR,true);
		$criteria->compare('IDENTIF_DOS_SISTEMAS_DE_GESTAO',$this->IDENTIF_DOS_SISTEMAS_DE_GESTAO,true);
		$criteria->compare('MATRSIAPE',$this->MATRSIAPE);
		$criteria->compare('CNPJ',$this->CNPJ);
		$criteria->compare('TIPO_INTEGRACAO_PAF_ECF',$this->TIPO_INTEGRACAO_PAF_ECF,true);
		$criteria->compare('TIPO_IMPRESSAO_ITEM_CUPOM',$this->TIPO_IMPRESSAO_ITEM_CUPOM,true);
		$criteria->compare('MEIO_GERACAO_SINTEGRA',$this->MEIO_GERACAO_SINTEGRA,true);
		$criteria->compare('TIPO_FUNCIONAMENTO',$this->TIPO_FUNCIONAMENTO,true);
		$criteria->compare('TRATATAMENTO_INTERRUP_IMPRESSA',$this->TRATATAMENTO_INTERRUP_IMPRESSA,true);
		$criteria->compare('TIPO_DESENVOLVIMENTO',$this->TIPO_DESENVOLVIMENTO,true);
		$criteria->compare('SISTEMA_OPERACIONAL',$this->SISTEMA_OPERACIONAL,true);
		$criteria->compare('COD_TIPO_AVALIACAO',$this->COD_TIPO_AVALIACAO);
		$criteria->compare('MD5_CONJUNTO_ARQUIVOS_EXE',$this->MD5_CONJUNTO_ARQUIVOS_EXE,true);
		$criteria->compare('MD5_PRINCIPAL_EXECUTAVEL',$this->MD5_PRINCIPAL_EXECUTAVEL,true);
		$criteria->compare('COD_SOFTWARE',$this->COD_SOFTWARE);
		$criteria->compare('GERENTE',$this->GERENTE,true);
		$criteria->compare('NUM_LAUDO',$this->NUM_LAUDO,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}