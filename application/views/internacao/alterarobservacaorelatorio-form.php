<meta charset="utf-8">
<body bgcolor="#C0C0C0">
    <div class="content"> <!-- Inicio da DIV content -->
        <h3 class="singular">Alterar</h3>
        <div>
            <form name="form_faturar" id="form_faturar" action="<?= base_url() ?>internacao/internacao/gravaralterarobservacaorelatorio/<?= $produto['0']->internacao_precricao_produto_id; ?>" method="post">
                <fieldset>
                    <table>
                        <tr>
                            <td style="text-align: left">
                                OBSERVACAO
                            </td>

                        </tr>

                        <tr>
                            <td style="text-align: left">
                                <input type="text" name="valorafaturar" id="valorafaturar" size="40" class="texto01" value="<?= $produto['0']->observacao; ?>" readonly />

                            </td>

                        </tr>


                    </table>
                    <br>
                    <br>

                    <table>


                        <tr>

                            <td style="text-align: center">
                                OBSERVACAO 
                            </td>


                        </tr>

                        <tr>

                            <td style="text-align: left" >
                                <input type="text" name="observacao" id="observacao" size="40" class="texto01"/>
                            </td>


                        </tr>


                    </table>


                    <hr/>
                    <button type="submit" name="btnEnviar" >Enviar</button>
            </form>
            </fieldset>
        </div>
    </div> <!-- Final da DIV content -->
</body>
<script type="text/javascript" src="<?= base_url() ?>js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="<?= base_url() ?>js/jquery-ui-1.8.5.custom.min.js" ></script>
<script type="text/javascript" src="<?= base_url() ?>js/jquery-meiomask.js" ></script>
<script type="text/javascript" src="<?= base_url() ?>js/jquery.validate.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/jquery-1.9.1.js" ></script>
<script type="text/javascript" src="<?= base_url() ?>js/jquery-ui-1.10.4.js" ></script>
<script type="text/javascript">

    //    (function($){
    //        $(function(){
    //            $('input:text').setMask();
    //        });
    //    })(jQuery);



</script>