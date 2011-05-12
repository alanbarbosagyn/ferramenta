<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
                'id' => 'software-form',
                'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($software); ?>
    <span><?php echo "Empresa" ?></span>
    <div class="row">
        <?php echo $form->labelEx($empresa, 'PROPRIETARIO'); ?>
        <?php echo $form->textField($empresa, 'PROPRIETARIO', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($empresa, 'PROPRIETARIO'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($empresa, 'CNPJ'); ?>
        <?php echo $form->textField($empresa, 'CNPJ'); ?>
        <?php echo $form->error($empresa, 'CNPJ'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($empresa, 'RAZAO_SOCIAL'); ?>
        <?php echo $form->textField($empresa, 'RAZAO_SOCIAL', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($empresa, 'RAZAO_SOCIAL'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($empresa, 'TELEFONE'); ?>
        <?php echo $form->textField($empresa, 'TELEFONE', array('size' => 15, 'maxlength' => 15)); ?>
        <?php echo $form->error($empresa, 'TELEFONE'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($empresa, 'RESPONSAVELTEC'); ?>
        <?php echo $form->textField($empresa, 'RESPONSAVELTEC', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($empresa, 'RESPONSAVELTEC'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($empresa, 'ASSISTENCIATEC'); ?>
        <?php echo $form->textField($empresa, 'ASSISTENCIATEC', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($empresa, 'ASSISTENCIATEC'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($empresa, 'COMPLEMENTO'); ?>
        <?php echo $form->textField($empresa, 'COMPLEMENTO', array('size' => 60, 'maxlength' => 150)); ?>
        <?php echo $form->error($empresa, 'COMPLEMENTO'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($empresa, 'EMAIL_TEC'); ?>
        <?php echo $form->textField($empresa, 'EMAIL_TEC', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($empresa, 'EMAIL_TEC'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($empresa, 'HOMEPAGE'); ?>
        <?php echo $form->textField($empresa, 'HOMEPAGE', array('size' => 60, 'maxlength' => 120)); ?>
        <?php echo $form->error($empresa, 'HOMEPAGE'); ?>
    </div>
    <span><?php echo "Endereço" ?></span>
    <div class="row">
        <?php echo $form->labelEx($endereco, 'LOGRADOURO'); ?>
        <?php echo $form->textField($endereco, 'LOGRADOURO', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($endereco, 'LOGRADOURO'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($endereco, 'BAIRRO'); ?>
        <?php echo $form->textField($endereco, 'BAIRRO', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($endereco, 'BAIRRO'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($endereco, 'CIDADE'); ?>
        <?php echo $form->textField($endereco, 'CIDADE', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($endereco, 'CIDADE'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($endereco, 'UF'); ?>
        <?php
        echo CHtml::activeDropDownList
        ($endereco, 'UF', array("AC" => "AC", "AL" => "AL", "AM" => "AM", "AP" => "AP",
        "BA" => "BA", "CE" => "CE", "DF" => "DF", "ES" => "ES", "GO" => "GO",
        "MA" => "MA", "MG" => "MS", "MT" => "MT", "PA" => "PA", "PB" => "PB", "PE" => "PE",
        "PI" => "PI", "PR" => "PR", "RJ" => "RJ", "RN" => "RN", "RO" => "RO", "RR" => "RR",
        "RS" => "RS", "SC" => "SC", "SE" => "SE", "SP" => "SP", "TO" => "TO"));
        ?>
<?php echo $form->error($endereco, 'UF'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($endereco, 'NUMERO'); ?>
<?php echo $form->textField($endereco, 'NUMERO'); ?>
<?php echo $form->error($endereco, 'NUMERO'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'NOME_COM_PROGRAMA'); ?>
<?php echo $form->textField($software, 'NOME_COM_PROGRAMA', array('size' => 50, 'maxlength' => 50)); ?>
<?php echo $form->error($software, 'NOME_COM_PROGRAMA'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'VERSAO'); ?>
<?php echo $form->textField($software, 'VERSAO', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($software, 'VERSAO'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'SENHA'); ?>
<?php echo $form->textField($software, 'SENHA', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($software, 'SENHA'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'IDENTIFICACAO_PRINCIPAL_ARQUIV'); ?>
<?php echo $form->textField($software, 'IDENTIFICACAO_PRINCIPAL_ARQUIV', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($software, 'IDENTIFICACAO_PRINCIPAL_ARQUIV'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'LOGIN'); ?>
<?php echo $form->textField($software, 'LOGIN', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($software, 'LOGIN'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'DATA_ENTRADA'); ?>
<?php echo $form->textField($software, 'DATA_ENTRADA'); ?>
<?php echo $form->error($software, 'DATA_ENTRADA'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'SGBD'); ?>
<?php echo $form->textField($software, 'SGBD', array('size' => 40, 'maxlength' => 40)); ?>
<?php echo $form->error($software, 'SGBD'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'IDENTIF_SISTEMA_PED'); ?>
<?php echo $form->textField($software, 'IDENTIF_SISTEMA_PED', array('size' => 60, 'maxlength' => 100)); ?>
<?php echo $form->error($software, 'IDENTIF_SISTEMA_PED'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'OBSERVACOES_FINAIS'); ?>
<?php echo $form->textField($software, 'OBSERVACOES_FINAIS', array('size' => 60, 'maxlength' => 500)); ?>
<?php echo $form->error($software, 'OBSERVACOES_FINAIS'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'LING_PROGR'); ?>
<?php echo $form->textField($software, 'LING_PROGR', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($software, 'LING_PROGR'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'IDENTIF_DOS_SISTEMAS_DE_GESTAO'); ?>
<?php echo $form->textField($software, 'IDENTIF_DOS_SISTEMAS_DE_GESTAO', array('size' => 60, 'maxlength' => 100)); ?>
<?php echo $form->error($software, 'IDENTIF_DOS_SISTEMAS_DE_GESTAO'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'MATRSIAPE'); ?>
<?php echo $form->textField($software, 'MATRSIAPE'); ?>
<?php echo $form->error($software, 'MATRSIAPE'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'TIPO_INTEGRACAO_PAF_ECF'); ?>
<?php echo $form->textField($software, 'TIPO_INTEGRACAO_PAF_ECF', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($software, 'TIPO_INTEGRACAO_PAF_ECF'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'TIPO_IMPRESSAO_ITEM_CUPOM'); ?>
<?php echo $form->textField($software, 'TIPO_IMPRESSAO_ITEM_CUPOM', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($software, 'TIPO_IMPRESSAO_ITEM_CUPOM'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'MEIO_GERACAO_SINTEGRA'); ?>
<?php echo $form->textField($software, 'MEIO_GERACAO_SINTEGRA', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($software, 'MEIO_GERACAO_SINTEGRA'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'TIPO_FUNCIONAMENTO'); ?>
<?php echo $form->textField($software, 'TIPO_FUNCIONAMENTO', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($software, 'TIPO_FUNCIONAMENTO'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'TRATATAMENTO_INTERRUP_IMPRESSA'); ?>
<?php echo $form->textField($software, 'TRATATAMENTO_INTERRUP_IMPRESSA', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($software, 'TRATATAMENTO_INTERRUP_IMPRESSA'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'TIPO_DESENVOLVIMENTO'); ?>
<?php echo $form->textField($software, 'TIPO_DESENVOLVIMENTO', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($software, 'TIPO_DESENVOLVIMENTO'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'SISTEMA_OPERACIONAL'); ?>
<?php echo $form->textField($software, 'SISTEMA_OPERACIONAL', array('size' => 20, 'maxlength' => 20)); ?>
<?php echo $form->error($software, 'SISTEMA_OPERACIONAL'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'GERENTE'); ?>
<?php echo $form->textField($software, 'GERENTE', array('size' => 50, 'maxlength' => 50)); ?>
<?php echo $form->error($software, 'GERENTE'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($software, 'NUM_LAUDO'); ?>
<?php echo $form->textField($software, 'NUM_LAUDO', array('size' => 10, 'maxlength' => 10)); ?>
<?php echo $form->error($software, 'NUM_LAUDO'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton($software->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->