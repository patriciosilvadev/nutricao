<?
$operador = $this->internacao_m->listaroperadores();
?>
<div class="content ficha_ceatox">
    <h3 class="h3_title">Checagem Temperatura Bolsa Parenteral Entrega</h3>
    <form name="parenteral_form" id="parenteral_form" action="<?= base_url() ?>internacao/internacao/gravartemperaturabolsaparenteralentrega/<?= $internacao_id; ?>" method="post">


        <fieldset>
            <legend>Temperatura </legend>
            <div>
                <label>Temperatura</label>
                <input type="text" name="temperatura" id="temperatura"  class="size1"   />C°
            </div>


            <div>
                <label>Data/hora de Checagem ex.( 20/01/2016 14:30:21)</label>
                <input type="text" name="data_checagem" id="data_checagem"  class="size3" alt="39/19/9999 29:59:59" value=""  />
            </div>



        </fieldset>

        <fieldset>
            <legend>Entrega</legend>



            <div>
                <label>Observações</label>
                <input type="text" name="observacao" id="observacao"  class="size4" value=""  />
            </div>

            <div>
                <label>Responsável pela entrega</label>
                <select name="responsavel" id="responsavel" class="size2">

                    <? foreach ($operador as $value) : ?>
                        <option value="<?= $value->operador_id; ?>" <?
                        if (@$_GET['responsavel'] == $value->operador_id):echo 'selected';
                        endif;
                        ?>><?php echo $value->operador; ?></option>
                            <? endforeach; ?>
                </select>
            </div>

            <div>
                <label>Responsável pelo Recebimento</label>
                <input type="text" name="recebimento" id="recebimento"  class="size2"/>
                <input type="hidden" name="hospital" id="hospital"  class="size2" value="<?= $hospital[0]->hospital_id; ?>"  />
            </div>


        </fieldset>

        <button type="submit" name="btnEnviar">Enviar</button>
        <button type="reset" name="btnLimpar">Limpar</button>
    </form>
</div>
<div class="clear"></div>

<link rel="stylesheet" href="<?= base_url() ?>css/jquery-ui-1.8.5.custom.css">
<script type="text/javascript" src="<?= base_url() ?>js/jquery.validate.js"></script>
<script type="text/javascript">

</script>
