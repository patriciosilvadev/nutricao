﻿<html>
<head>
<meta charset="utf-8">
<link href="<?= base_url() ?>/css/tabelarae.css" rel="stylesheet" type="text/css">
<title>Guia de Serviço Profissional</title>
</head>

<body>
<table id="tabelaspec" width="92%" border="1" align="center" cellpadding="0" cellspacing="0" class="tipp">
  <tbody>
  <tr bgcolor="#B1B1B1">
      <td width="133" height="51" style="font-size: 9px;"><p class="ttr"><strong style="font-weight: normal; text-align: center;"><strong style="font-weight: normal; text-align: left;"><img src="<?= base_url() ?>/img/convenios/<?echo $listar[0]->convenio_id;?>.jpg"  width="133" height="49" class="ttr"/></strong></strong></p></td>
      <td height="51" colspan="8" class="ttrl" style="font-size: 9px;"><p>GUIA DE SERVIÇO PROFISSIONAL/SERVIÇO AUXILIAR DE
</p>
      <p> DIAGNÓSTICO E TERAPIA - SP/SADT</p></td>
      <td width="239" style="font-size: 9px;"><p>2-N° Guia no Prestador</p><p><strong>15457879</strong></p></td>
    </tr>
    <tr>
      <td colspan="2" class="ti">1- Registro ANS</td>
      <td colspan="8" class="ti">2- Número da Guia Principal</td>
      
    </tr>
    <tr>
     <td height="16" colspan="2" class="tc"><strong>dsdas</strong></td>
      <td colspan="8" class="tc"><strong>fds </strong></td>
      
    </tr>
     <tr>
      <td colspan="3" class="ti">4- Data de autorização</td>
      <td colspan="2" class="ti">5- Senha</td>
      
      <td colspan="2" class="ti">6- Data de validade da Senha </td>
      <td colspan="3" class="ti">7- Número da guia atribuida pela operadora</td>
    </tr>
    <tr>
     <td height="16" colspan="3" class="tc"><strong><?$ano= substr($listar[0]->data_solicitacao,0,4);?>
                                                            <?$mes= substr($listar[0]->data_solicitacao,5,2);?>
                                                            <?$dia= substr($listar[0]->data_solicitacao,8,2);?>
                                                            <?$datafinal= $dia . '/' . $mes . '/' . $ano; ?>
                                                            <?php echo$datafinal?></strong></td>
      <td colspan="2" class="tc"><strong><?echo $listar[0]->aih;?> </strong></td>
       <td colspan="2" class="tc"><strong>sdsf </strong></td>
       <td colspan="3" class="tc"><strong>sdsf </strong></td>
    </tr>
    <tr>
      <td colspan="10" align="center" bgcolor="#B1B1B1" style="text-align:left;font-size: 9px;"><strong > DADOS DO BENEFICIÁRIO</strong></td>
    </tr>
   
    
  </tbody>
   <tbody>
  
    
     <tr>
      <td colspan="3" class="ti">8-Número da carteira</td>
      <td width="259" colspan="1" class="ti">9-Validade da carteira</td>
      <td colspan="4" class="ti">10- Nome</td>
       <td width="208" colspan="1" class="ti">11-Cartão Nacional de saúde</td>
        <td colspan="1" class="ti">12- Atendimento a RN</td>
    </tr>
    <tr>
     <td height="16" colspan="3" class="tc"><strong><?echo $listar[0]->convenionumero;?></strong></td>
      <td colspan="1" class="tc"><strong>sdsf </strong></td>
       <td colspan="4" class="tc"><strong><?echo $listar[0]->nome;?> </strong></td>
       <td colspan="1" class="tc"><strong>sdsf </strong></td>
       <td colspan="1" class="tc"><strong>sdsf </strong></td>
    </tr>
    <tr>
      <td colspan="10" align="center" bgcolor="#B1B1B1" style="text-align:left;font-size: 9px;"><strong > DADOS DO SOLICITANTE</strong></td>
    </tr>
     <tr>
      <td colspan="2" class="ti">13-Código da Operadora</td>
      <td colspan="8" class="ti">14- Nome do Contratado</td>
      
    </tr>
    <tr>
     <td height="16" colspan="2" class="tc"><strong>dsdas</strong></td>
      <td colspan="8" class="tc"><strong><?echo $listar[0]->hospital;?> </strong></td>
      
    </tr>
  
  </tbody>
  
</table>
<table id="tabelaspec" width="80%" border="1" align="center" cellpadding="0" cellspacing="0" class="tipp">
  <tbody>
  
    <tr class="tic">
      <td width="20%" height="13" class="tic">15- Nome da Profissional Solicitante</td>
      <td width="10%" colspan="1" class="tic">16- Conselho Profissional</td>
      
      <td width="13%" colspan="1" class="tic">17- Número no Conselho </td>
      
      <td width="4%" colspan="1" class="tic">18-UF </td>
      <td width="13%" colspan="1" class="tic">19- Código CBO </td>
      <td width="40%" colspan="1" class="tic">20- Assinatura do Profissional Solicitante</td>
      
    </tr>
    <tr>
      <td class="tc"><strong>dsadas</strong></td>
     <td height="16" colspan="1" class="tc"><strong>dsdas</strong></td>
     
      <td colspan="1" class="tc"><strong>fds </strong></td>
      
      <td colspan="1" class="tc"><strong>CE </strong></td>
       <td colspan="1" class="tc"><strong>45654 </strong></td>
       <td colspan="1" class="tc"><strong>45654 </strong></td>
    </tr>
    <tr>
      <td colspan="10" align="center" bgcolor="#B1B1B1" style="text-align:left;font-size: 9px;"><strong > DADOS DA SOLICITAÇÃO/ PROCEDIMENTOS E EXAMES SOLICITADOS</strong></td>
    </tr>
     <tr class="tic">
      <td width="20%" height="13" class="tic">21- Caráter do atendimento</td>
      <td colspan="2" class="tic">22- Data da Solicitação</td>
      
      <td colspan="3" class="tic">23- Indicação Clínica</td>
    </tr>
    <tr>
      <td class="tc"><strong>dsadas</strong></td>
     <td height="16" colspan="2" class="tc"><strong>dsdas</strong><strong>fds </strong></td>
     
      <td colspan="3" class="tc"><strong><?echo $listar[0]->carater_internacao;?> </strong><strong> </strong></td>
    </tr>
    
  </tbody>
  
</table>
<table id="tabelaspec" width="80%" border="1" align="center" cellpadding="0" cellspacing="0" class="tipp">
  <tbody>
  
    <tr class="semborda">
      <td width="16%" height="13" class="semborda">24- Tabela</td>
      <td width="14%" class="semborda">25- Código do Procedimento </td>
      
      <td width="47%" colspan="1" class="semborda">26- Descrição</td>
      <td width="12%" colspan="1" class="semborda">27- Quantidade Solicitada</td>
       <td width="11%" colspan="1" class="semborda">28- Quantidade ????</td>
      
    </tr>
    <tr>
      <td class="semborda"><strong>36</strong></td>
     <td height="16" class="semborda"><strong>545454546</strong></td>
     
      <td colspan="1" class="semborda"><strong>_________________________________________________________________________________________________________</strong></td>
       <td colspan="1" class="semborda"><strong>336 </strong></td>
        <td colspan="1" class="semborda"><strong>766</strong></td>
    </tr>
    <tr>
      <td class="semborda"><strong>65</strong></td>
     <td height="16" class="semborda"><strong>545465465</strong></td>
     
      <td colspan="1" class="semborda"><strong>_________________________________________________________________________________________________________</strong></td>
       <td colspan="1" class="semborda"><strong>335 </strong></td>
        <td colspan="1" class="semborda"><strong>552</strong></td>
    </tr>
    <tr>
      <td class="semborda"><strong>56</strong></td>
     <td height="16" class="semborda"><strong>511445465</strong></td>
     
      <td colspan="1" class="semborda"><strong>_________________________________________________________________________________________________________</strong></td>
       <td colspan="1" class="semborda"><strong>448 </strong></td>
        <td colspan="1" class="semborda"><strong>565</strong></td>
    </tr>
    <tr>
      <td class="semborda"><strong>35</strong></td>
     <td height="16" class="semborda"><strong>545454588</strong></td>
     
      <td colspan="1" class="semborda"><strong>_________________________________________________________________________________________________________</strong></td>
       <td colspan="1" class="semborda"><strong>451</strong></td>
        <td colspan="1" class="semborda"><strong>452</strong></td>
    </tr>
    <tr>
      <td class="semborda"><strong>54</strong></td>
     <td height="16" class="semborda"><strong>545456412</strong></td>
     
      <td colspan="1" class="semborda"><strong>_________________________________________________________________________________________________________</strong></td>
       <td colspan="1" class="semborda"><strong>696</strong></td>
        <td colspan="1" class="semborda"><strong>541</strong></td>
    </tr>
    
  </tbody>
  
</table>
<table id="tabelaspec" width="80%" border="1" align="center" cellpadding="0" cellspacing="0" class="tipp">
  <tbody>
  
    <tr>
        <td colspan="8" align="center" bgcolor="#B1B1B1" class="tic" style="text-align:left;font-size: 9px;"><strong > DADOS DO CONTRATADO EXECUTANTE</strong></td>
    </tr>
     <tr class="tic">
      <td width="18%" height="13" class="tic">29- Código da Operadora</td>
      <td width="39%" class="tic">30-Nome do Contratado</td>
      
      <td colspan="2" class="tic">31- Código CNES</td>
    </tr>
    <tr>
      <td class="tic"><strong>dsadas</strong></td>
     <td height="16" class="tc"><strong>dsdas</strong><strong>fds </strong></td>
     
      <td colspan="2" class="tc"><strong>Testesd </strong><strong> </strong></td>
    </tr>
    <tr>
        <td colspan="8" align="center" bgcolor="#B1B1B1" class="tic" style="text-align:left;font-size: 9px;"><strong > DADOS DO ATENDIMENTO</strong></td>
    </tr>
    <tr class="tic">
      <td width="18%" height="13" class="ti">32- Tipo de atendimento</td>
      <td class="tic">33- Indicação do Acidente (Acidente ou doença relacionada)</td>
      
      <td width="20%" class="tic"> 34- Tipo de Consulta</td>
      <td width="23%" colspan="1" class="tic">35- Motivo de Encerramento do Atendimento</td>
      
    </tr>
    <tr>
      <td class="tc"><strong>35</strong></td>
     <td height="16" class="tc"><strong>87</strong></td>
     
      <td class="tc"><strong>66</strong></td>
       <td colspan="1" class="tc"><strong>69547 </strong></td>
    </tr>
    <tr>
        <td colspan="8" align="center" bgcolor="#B1B1B1" class="tic" style="text-align:left;font-size: 9px;"><strong>DADOS DA EXECUÇÃO/PROCEDIMENTOS E EXAMES REALIZADOS</strong></td>
    </tr>
    
  </tbody>
  
</table>
<table id="tabelaspec" width="80%" border="1" align="center" cellpadding="0" cellspacing="0" class="tipp">
  <tbody>
  
    <tr class="semborda">
      <td width="3%" height="12" class="semborda">36- Data</td>
      <td width="6%" class="semborda">37- Hora Inicial</td>
      
      <td width="5%" colspan="1" class="semborda">38- Hora Final</td>
      <td width="5%" colspan="1" class="semborda">39- Tabela</td>
       <td width="10%" colspan="1" class="semborda">40- Código do Procedimento</td>
       <td width="32%" colspan="1" class="semborda">41- Descrição</td>
       <td width="4%" colspan="1" class="semborda">42- Qtde</td>
       <td width="4%" colspan="1" class="semborda">43- Vla</td>
        <td width="3%" colspan="1" class="semborda">44- Tec.</td>
        <td width="8%" colspan="1" class="semborda">45- Fator Red./Acresc.</td>
        <td width="10%" colspan="1" class="semborda">46- Valor Unitário (R$)</td>
        <td width="10%" colspan="1" class="semborda">47- Valor Total (R$)</td>
      
    </tr>
    <tr>
      <td class="semborda"><strong>1-36</strong></td>
     <td height="16" class="semborda"><strong>15:32:52</strong></td>
     
      <td colspan="1" class="semborda"><strong>17:32:52</strong></td>
       <td colspan="1" class="semborda"><strong>56 </strong></td>
        <td colspan="1" class="semborda"><strong>766</strong></td>
        <td colspan="1" class="semborda"><strong>______________________________________________________________________________</strong></td>
        <td colspan="1" class="semborda"><strong>336</strong></td>
        <td colspan="1" class="semborda"><strong>5</strong></td>
         <td colspan="1" class="semborda"><strong>6</strong></td>
         <td colspan="1" class="semborda"><strong>569</strong></td>
         <td colspan="1" class="semborda"><strong>235.689,56</strong></td>
         <td colspan="1" class="semborda"><strong>457.845,12</strong></td>
    </tr>
    <tr>
      <td class="semborda"><strong>2-36</strong></td>
     <td height="16" class="semborda"><strong>15:32:52</strong></td>
     
      <td colspan="1" class="semborda"><strong>17:32:52</strong></td>
       <td colspan="1" class="semborda"><strong>56 </strong></td>
        <td colspan="1" class="semborda"><strong>766</strong></td>
        <td colspan="1" class="semborda"><strong>______________________________________________________________________________</strong></td>
        <td colspan="1" class="semborda"><strong>336</strong></td>
        <td colspan="1" class="semborda"><strong>5</strong></td>
         <td colspan="1" class="semborda"><strong>6</strong></td>
         <td colspan="1" class="semborda"><strong>569</strong></td>
         <td colspan="1" class="semborda"><strong>235.689,56</strong></td>
         <td colspan="1" class="semborda"><strong>457.845,12</strong></td>
    </tr>
    <tr>
      <td class="semborda"><strong>3-36</strong></td>
     <td height="16" class="semborda"><strong>15:32:52</strong></td>
     
      <td colspan="1" class="semborda"><strong>17:32:52</strong></td>
       <td colspan="1" class="semborda"><strong>56 </strong></td>
        <td colspan="1" class="semborda"><strong>766</strong></td>
        <td colspan="1" class="semborda"><strong>______________________________________________________________________________</strong></td>
        <td colspan="1" class="semborda"><strong>336</strong></td>
        <td colspan="1" class="semborda"><strong>5</strong></td>
         <td colspan="1" class="semborda"><strong>6</strong></td>
         <td colspan="1" class="semborda"><strong>569</strong></td>
         <td colspan="1" class="semborda"><strong>235.689,56</strong></td>
         <td colspan="1" class="semborda"><strong>457.845,12</strong></td>
    </tr>
    <tr>
      <td class="semborda"><strong>4-36</strong></td>
     <td height="16" class="semborda"><strong>15:32:52</strong></td>
     
      <td colspan="1" class="semborda"><strong>17:32:52</strong></td>
       <td colspan="1" class="semborda"><strong>56 </strong></td>
        <td colspan="1" class="semborda"><strong>766</strong></td>
        <td colspan="1" class="semborda"><strong>______________________________________________________________________________</strong></td>
        <td colspan="1" class="semborda"><strong>336</strong></td>
        <td colspan="1" class="semborda"><strong>5</strong></td>
         <td colspan="1" class="semborda"><strong>6</strong></td>
         <td colspan="1" class="semborda"><strong>569</strong></td>
         <td colspan="1" class="semborda"><strong>235.689,56</strong></td>
         <td colspan="1" class="semborda"><strong>457.845,12</strong></td>
    </tr>
    <tr>
        <td colspan="12" align="center" bgcolor="#B1B1B1" class="tic" style="text-align:left;font-size: 9px;"><strong>IDENTIFICAÇÃO DO(s) PROFISSIONAL(is) EXECUTANTE(s)</strong></td>
    </tr>
     
    
    
  </tbody>
  
</table>
<table id="tabelaspec" width="80%" border="1" align="center" cellpadding="0" cellspacing="0" class="tipp">
  <tbody>
  
    <tr class="semborda">
      <td width="6%" height="12" class="semborda">48- Seq. Ref</td>
      <td width="7%" class="semborda">49- Grau Part.</td>
      <td width="13%" colspan="1" class="semborda">50- Código na operadora/CPF</td>
       <td width="36%" colspan="1" class="semborda">51- Nome do Profissional</td>
       <td width="10%" colspan="1" class="semborda">52- Conselho Profissional</td>
       <td width="14%" class="semborda">53- Número no Conselho</td>
        <td width="5%" colspan="1" class="semborda">54- UF</td>
        <td width="9%" colspan="1" class="semborda">55- Código CBO</td>
      
    </tr>
    <tr>
      <td height="16" class="semborda"><strong>56</strong><strong></strong></td>
     <td class="semborda"><strong>69</strong><strong></strong></td>
       <td colspan="1" class="semborda"><strong>558887784584554512</strong></td>
        <td colspan="1" class="semborda"><strong>_____________________________________________________________________________________</strong></td>
        <td colspan="1" class="semborda"><strong>336</strong></td>
        <td class="semborda"><strong>5</strong><strong>6</strong><strong>569569956</strong></td>
         <td colspan="1" class="semborda"><strong>CE</strong></td>
         <td colspan="1" class="semborda"><strong>C65659</strong></td>
    </tr>
    <tr>
      <td height="16" class="semborda"><strong>56</strong><strong></strong></td>
     <td class="semborda"><strong>69</strong><strong></strong></td>
       <td colspan="1" class="semborda"><strong>558887784584554512</strong></td>
        <td colspan="1" class="semborda"><strong>_____________________________________________________________________________________</strong></td>
        <td colspan="1" class="semborda"><strong>336</strong></td>
        <td class="semborda"><strong>5</strong><strong>6</strong><strong>569569956</strong></td>
         <td colspan="1" class="semborda"><strong>CE</strong></td>
         <td colspan="1" class="semborda"><strong>C65659</strong></td>
    </tr>
    <tr>
      <td height="16" class="semborda"><strong>56</strong><strong></strong></td>
     <td class="semborda"><strong>69</strong><strong></strong></td>
       <td colspan="1" class="semborda"><strong>558887784584554512</strong></td>
        <td colspan="1" class="semborda"><strong>_____________________________________________________________________________________</strong></td>
        <td colspan="1" class="semborda"><strong>336</strong></td>
        <td class="semborda"><strong>5</strong><strong>6</strong><strong>569569956</strong></td>
         <td colspan="1" class="semborda"><strong>CE</strong></td>
         <td colspan="1" class="semborda"><strong>C65659</strong></td>
    </tr>
    <tr>
      <td height="16" class="semborda"><strong>56</strong><strong></strong></td>
     <td class="semborda"><strong>69</strong><strong></strong></td>
       <td colspan="1" class="semborda"><strong>558887784584554512</strong></td>
        <td colspan="1" class="semborda"><strong>_____________________________________________________________________________________</strong></td>
        <td colspan="1" class="semborda"><strong>336</strong></td>
        <td class="semborda"><strong>5</strong><strong>6</strong><strong>569569956</strong></td>
         <td colspan="1" class="semborda"><strong>CE</strong></td>
         <td colspan="1" class="semborda"><strong>C65659</strong></td>
    </tr>
     <tr class="ti">
      <td height="12" colspan="8" class="ti">56- Data de Realização de Procedimentos em Série &nbsp;&nbsp;&nbsp;&nbsp; 57- Assinatura do Beneficiário ou Responsável</td>
    </tr>
    <tr>
      <td height="16" colspan="8" class="semborda"><strong>1- 25/12/2015 _______________________________ 3- 25/12/2015 _______________________________ 5- 25/12/2015 _______________________________ 7- 25/12/2015 _______________________________ 9- 25/12/2015 _______________________________</strong></td>
    </tr>
    <tr>
      <td height="16" colspan="8" class="semborda"><strong>2- 25/12/2015 _______________________________ 4- 25/12/2015 _______________________________ 6- 25/12/2015 _______________________________ 8- 25/12/2015 _______________________________ 10- 25/12/2015 _______________________________</strong></td>
    </tr>
    
    
  </tbody>
  
</table>
<table id="tabelaspec" width="80%" border="1" align="center" cellpadding="0" cellspacing="0" class="tipp">
  <tbody>
  <tr>
      <td height="13" colspan="10" class="ti">58- Observação / Justificativa</td>
    </tr>
    <tr>
        <td height="34" colspan="10" class="tc"><strong>sadçasldak çlasjdklajsdla hsdakjshdaksjhdalksjdh akjshd klajhsdl kjasd</strong><strong></strong></td>
    </tr>
    <tr class="tic">
      <td width="11%" height="13" class="tic">59- Total de Procedimentos</td>
      <td width="13%" height="13" colspan="1" class="tic">60- Total de Taxas e Alugueis (RS)</td>
      <td width="15%" height="13" class="tic">61- Total de Materiais (R$)</td>
      <td width="17%" height="13" class="tic">62- Total de OPME (R$)</td>
      <td width="16%" height="13" class="tic">63- Total de Medicamentos (R$)</td>
      <td width="16%" height="13" class="tic">64- Total de Gases Medicinais (R$)</td>
      
      <td width="12%" colspan="1" class="tic">65- Total Geral (R$)</td>
    </tr>
    <tr>
      <td class="tc"><strong>dsadas</strong></td>
     <td height="16" colspan="1" class="tc"><strong>dsdas</strong><strong>fds </strong></td>
     <td height="16" colspan="1" class="tc"><strong>5545</strong></td>
     <td height="16" colspan="1" class="tc"><strong>56599</strong></td>
     <td height="16" colspan="1" class="tc"><strong>8956</strong></td>
     <td height="16" colspan="1" class="tc"><strong>898942</strong></td>
     
      <td colspan="1" class="tc"><strong>4455656575</strong> </td>
    </tr>
    <tr class="tic">
      <td height="13" colspan="3" class="tic">66- Assinatura do Responsável Pela Autorização</td>
      <td height="13" colspan="2" class="tic">67- Assinatura do beneficiário ou Responsável</td>
      <td height="13" colspan="2" class="tic">68- Assinatura do Contratado</td>
    </tr>
    <tr>
      <td height="51" colspan="3" class="tc">&nbsp;</td>
     <td height="51" colspan="2" class="tc">&nbsp;</td>
     <td height="51" colspan="2" class="tc">&nbsp;</td>
    </tr>
    
  </tbody>
  
</table>



</body>
</html>