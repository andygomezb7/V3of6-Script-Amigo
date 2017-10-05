<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 19:42:32
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\ads_i\pages\adsmypage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267395453f462ec82e5-51340183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5651788445a18e0c92342dae2153e7ddb9ee355' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\ads_i\\pages\\adsmypage.tpl',
      1 => 1418348547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267395453f462ec82e5-51340183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453f46344aa26_98876260',
  'variables' => 
  array (
    'tsInfoA' => 0,
    'pago' => 0,
    'stat' => 0,
    'ad' => 0,
    'as' => 0,
    'af' => 0,
    'afd' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453f46344aa26_98876260')) {function content_5453f46344aa26_98876260($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><div class="cntn_adsmypage">
<div class="obj_cnt_ddso">


<?php if ($_smarty_tpl->tpl_vars['tsInfoA']->value['au_type_camp']==2||$_smarty_tpl->tpl_vars['tsInfoA']->value['au_type_camp']==1) {?>
<div class="cntn_ddso_cncn">

<h2 style="text-align: -webkit-center;margin: 8px 0px 0px 0px;font-weight: normal;">
Informe: <?php echo $_smarty_tpl->tpl_vars['tsInfoA']->value['au_name'];?>
</h2>
<div class="floatR"><a class="btn_green btn color_white rcrd_pgds_h">Recorrido</a></div>
<div class="size11 color_gray" style="text-align: -webkit-center;margin: 6px 0px 0px 0px;"><span class="rdrd_info1 clearfix" style="padding: 2px 3px;background:#FFFFFF;">Las estadisticas no estan en vivo, puede que estas estadisticas no sean exactas.</span>

<span class="clearfix">Monto total del mes <?php if ($_smarty_tpl->tpl_vars['tsInfoA']->value['au_type_camp']==1) {?>a pagar<?php } else { ?>a recibir<?php }?>: <b><?php echo $_smarty_tpl->tpl_vars['pago']->value;?>
</b> WRTS</span>

</div>
<div class="ttl_m" style="padding: 6px 0px;"></div>

<div class="rlst">
<div class="rlst_tt"><h3>Clics en los ultimos dias</h3></div>
<div class="rlst_cnt">
<table width="97%" cellpadding="0" cellspacing="0" border="0" class="table txtinfot2">
<thead>
<th>Tiempo</th>
<th>Clics</th>
<th>Fecha</th>
</thead>
<tbody><?php if ($_smarty_tpl->tpl_vars['stat']->value['data']) {?>
<?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['ad']->value['data']) {?><tr>
<td class="th"><?php echo $_smarty_tpl->tpl_vars['ad']->value['title'];?>
</td>
<?php  $_smarty_tpl->tpl_vars['as'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['as']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['as']->key => $_smarty_tpl->tpl_vars['as']->value) {
$_smarty_tpl->tpl_vars['as']->_loop = true;
?>
<td><?php echo $_smarty_tpl->tpl_vars['as']->value['ads_total'];?>
</td>
<td><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['as']->value['hace']);?>
</td>
<?php } ?>
</tr><?php }?>
<?php } ?><?php } else { ?>No hay registro<?php }?>
</tbody>
</table>
</div>
<div class="rlst_right">
<div id="stat_1" class="floatL" style="width:97%;height: 326px; margin: 0 auto"></div>
</div>
</div>

<div class="rlst">
<div class="rlst_tt"><h3>Navegadores</h3></div>
<div class="rlst_cnt">
<table width="97%" cellpadding="0" cellspacing="0" border="0" class="table">
<thead>
<th>Navegador</th>
<th>Clics</th>
<th>Fecha</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['af'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['af']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stat']->value['nav']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['af']->key => $_smarty_tpl->tpl_vars['af']->value) {
$_smarty_tpl->tpl_vars['af']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['af']->value['data']) {?><tr>
<td class="th"><?php echo $_smarty_tpl->tpl_vars['af']->value['title'];?>
</td>
<?php  $_smarty_tpl->tpl_vars['afd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['afd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['af']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['afd']->key => $_smarty_tpl->tpl_vars['afd']->value) {
$_smarty_tpl->tpl_vars['afd']->_loop = true;
?>
<td><?php echo $_smarty_tpl->tpl_vars['afd']->value['ads_total'];?>
</td>
<td><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['afd']->value['hace']);?>
</td>
<?php } ?>
</tr><?php }?>
<?php } ?>
</tbody>
</table>
</div>
<div class="rlst_right">
<div id="stat_2" class="floatL" style="width:97%;height: 326px; margin: 0 auto"></div>
</div>
</div>

<div class="rlst">
<div class="rlst_tt"><h3>Sistema operativo</h3></div>
<div class="rlst_cnt">
<table width="97%" cellpadding="0" cellspacing="0" border="0" class="table">
<thead>
<th>Sistema</th>
<th>Clics</th>
<th>Fecha</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['af'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['af']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stat']->value['os']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['af']->key => $_smarty_tpl->tpl_vars['af']->value) {
$_smarty_tpl->tpl_vars['af']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['af']->value['data']) {?><tr>
<td class="th"><?php echo $_smarty_tpl->tpl_vars['af']->value['title'];?>
</td>
<?php  $_smarty_tpl->tpl_vars['afd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['afd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['af']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['afd']->key => $_smarty_tpl->tpl_vars['afd']->value) {
$_smarty_tpl->tpl_vars['afd']->_loop = true;
?>
<td><?php echo $_smarty_tpl->tpl_vars['afd']->value['ads_total'];?>
</td>
<td><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['afd']->value['hace']);?>
</td>
<?php } ?>
</tr><?php }?>
<?php } ?>
</tbody>
</table>
</div>
<div class="rlst_right">
<div id="stat_3" class="floatL" style="width:97%;height: 326px; margin: 0 auto"></div>
</div>
</div>

</div>
<div class="::sstr_ddos_::ssd">
<div><div><div></div><div></div></div><div><div></div><div>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_2.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/adsmyp_ddso.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/adsmyp_ddso.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/ttr/ads_pg_h.js"></script>
<script type="text/javascript">
$(function () {
$('#stat_1').highcharts({ chart: { type: 'column' }, title: { text: 'Clics en tu anuncio los ultimos dias' },
subtitle: { text: '' },xAxis: {
categories: [<?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['ad']->value['data']) {?>'<?php echo $_smarty_tpl->tpl_vars['ad']->value['title'];?>
',<?php }?><?php } ?>] },
yAxis: { min: 0, title: { text: 'Clics los ultimos dias' } },
tooltip: {
headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' + '<td style="padding:0"><b>{point.y:.1f} clicks</b></td></tr>',
footerFormat: '</table>', shared: true, useHTML: true },
plotOptions: { column: { pointPadding: 0.2, borderWidth: 0 } },
series: [{ name: 'Clics',
data: [<?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stat']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['ad']->value['data']) {?><?php  $_smarty_tpl->tpl_vars['as'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['as']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['as']->key => $_smarty_tpl->tpl_vars['as']->value) {
$_smarty_tpl->tpl_vars['as']->_loop = true;
?><?php if (!$_smarty_tpl->tpl_vars['as']->value['ads_total']) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['as']->value['ads_total'];?>
<?php }?>,<?php } ?><?php }?><?php } ?>] }] 
 });  $('#stat_2').highcharts({ chart: { plotBackgroundColor: null, plotBorderWidth: null, plotShadow: false }, title: { text: 'Navegadores' }, tooltip: { pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>' }, plotOptions: { pie: { allowPointSelect: true, cursor: 'pointer', dataLabels: { enabled: false }, showInLegend: true } },
series: [{ type: 'pie', name: 'Visitas', data: [ /*{ name: 'Chrome', y: 12.8, sliced: true, selected: true },*/
<?php  $_smarty_tpl->tpl_vars['af'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['af']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stat']->value['nav']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['af']->key => $_smarty_tpl->tpl_vars['af']->value) {
$_smarty_tpl->tpl_vars['af']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['af']->value['data']) {?>['<?php echo $_smarty_tpl->tpl_vars['af']->value['title'];?>
', <?php  $_smarty_tpl->tpl_vars['afd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['afd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['af']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['afd']->key => $_smarty_tpl->tpl_vars['afd']->value) {
$_smarty_tpl->tpl_vars['afd']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['afd']->value['ads_total'];?>
],<?php } ?><?php }?><?php } ?>

] }] }); $('#stat_3').highcharts({ chart: { plotBackgroundColor: null, plotBorderWidth: null, plotShadow: false }, title: { text: 'Sistemas operativos' }, tooltip: { pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>' }, plotOptions: { pie: { allowPointSelect: true, cursor: 'pointer', dataLabels: { enabled: false }, showInLegend: true } },
series: [{ type: 'pie', name: 'Visitas', data: [ /*{ name: 'Chrome', y: 12.8, sliced: true, selected: true },*/
<?php  $_smarty_tpl->tpl_vars['af'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['af']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stat']->value['os']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['af']->key => $_smarty_tpl->tpl_vars['af']->value) {
$_smarty_tpl->tpl_vars['af']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['af']->value['data']) {?>['<?php echo $_smarty_tpl->tpl_vars['af']->value['title'];?>
', <?php  $_smarty_tpl->tpl_vars['afd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['afd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['af']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['afd']->key => $_smarty_tpl->tpl_vars['afd']->value) {
$_smarty_tpl->tpl_vars['afd']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['afd']->value['ads_total'];?>
],<?php } ?><?php }?><?php } ?>

] }] });
});
</script>
</div></div></div>
</div>
<?php }?>
</div>
</div><?php }} ?>
