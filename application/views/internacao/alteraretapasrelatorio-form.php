<meta charset="utf-8">
<body bgcolor="#C0C0C0">
    <div class="content"> <!-- Inicio da DIV content -->
        <h3 class="singular">Alterar</h3>
        <div>
            <form name="form_faturar" id="form_faturar" action="<?= base_url() ?>internacao/internacao/gravaralteraretapasprescricao/<?= $produto['0']->internacao_precricao_produto_id; ?>" method="post">
                <fieldset>
                    <table>
                        <tr>
                            
                            <td style="text-align: left">
                                Etapas 
                            </td>
                            
                        </tr>

                        <tr>
                                <input type="hidden" id="txtinternacao" name="etapa_id"  class="texto06" value="<?= $produto['0']->internacao_precricao_etapa_id; ?>" readonly/>

                            <td style="text-align: left">
                                <input type="text" name="valorafaturar" id="valorafaturar" size="4" class="texto01" value="<?= $produto['0']->etapas; ?>" readonly />

                            </td>
                           
                        </tr>


                    </table>
                    <br>
                    
                  
                    <table>


                        <tr>
                            <td style="text-align: center;">
                                Etapas 
                            </td>
                            
                        </tr>

                        <tr>
                            <td style="text-align: left">
                                <select name="etapas" id="etapas" class="size1" >
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </td>
                            
                        </tr>


                    </table>
                    <dl class="dl_desconto_lista">




                        <dd>

                        </dd>
                    </dl>    

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