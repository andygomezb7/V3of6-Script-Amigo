<?php /* Smarty version Smarty-3.1.19, created on 2014-11-23 21:57:16
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\estadisticas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22639547286505b8d89-09270650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4b2cdd4f5f14d0f6c3c0a9576ae088514992db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\estadisticas.tpl',
      1 => 1416798493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22639547286505b8d89-09270650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5472865066ff31_41744811',
  'variables' => 
  array (
    'tsConfig' => 0,
    'statics' => 0,
    's' => 0,
    'tt' => 0,
    'skd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5472865066ff31_41744811')) {function content_5472865066ff31_41744811($_smarty_tpl) {?><h2 class="title">Estadisticas globales en <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
</h2>
<p>En esta parte de la administración de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 puedes llevar control de las estadisticas globales en <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 y su baja y subida de actividad, usa muy bien esta parte ya que es una de las <b>10 paginas maestras</b>.</p>
<br><br>
<h3 class="tres">ULTIMAS VISITAS</h3>
<canvas id="globalsStatics" width="600" height="400"></canvas>
<br><br>

<h3 class="tres">ULTIMAS ACTIVIDAD</h3>
<canvas id="actgloblastatics" class="dsnone" width="600" height="400"></canvas>

<div class="::sttr" role="sttr">
<div><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/code/Chart.js"></script>
<script type="text/javascript">
$(function(){
var options = { scaleBeginAtZero : true, scaleShowGridLines : true, scaleGridLineColor : "rgba(0,0,0,.05)", scaleGridLineWidth : 1, barShowStroke : true, barStrokeWidth : 2, barValueSpacing : 5, barDatasetSpacing : 1, legendTemplate : "<ul class=\"<<?php ?>%=name.toLowerCase()%<?php ?>>-legend\"><<?php ?>% for (var i=0; i<datasets.length; i++){%<?php ?>><li><span style=\"background-color:<<?php ?>%=datasets[i].lineColor%<?php ?>>\"></span><<?php ?>%if(datasets[i].label){%<?php ?>><<?php ?>%=datasets[i].label%<?php ?>><<?php ?>%}%<?php ?>></li><<?php ?>%}%<?php ?>></ul>" }

var ctxglobalstats = $("#globalsStatics").get(0).getContext("2d");
var dataGlobals = {
    labels: [<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statics']->value['visitas']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['s']->value['data']) {?>"<?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
",<?php }?><?php } ?>],
    datasets: [{
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [<?php  $_smarty_tpl->tpl_vars['tt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statics']->value['visitas']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tt']->key => $_smarty_tpl->tpl_vars['tt']->value) {
$_smarty_tpl->tpl_vars['tt']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['tt']->value['data']) {?><?php  $_smarty_tpl->tpl_vars['skd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tt']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skd']->key => $_smarty_tpl->tpl_vars['skd']->value) {
$_smarty_tpl->tpl_vars['skd']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['skd']->value['total'];?>
,<?php } ?><?php }?><?php } ?>]
        }, ]
};
var myLineChart = new Chart(ctxglobalstats).Line(dataGlobals, options);

var ctxglobalstatsact = $("#actgloblastatics").get(0).getContext("2d");
var dataGlobalsact = {
    labels: [<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statics']->value['actividad']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['s']->value['data']) {?>"<?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
",<?php }?><?php } ?>],
    datasets: [{
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [<?php  $_smarty_tpl->tpl_vars['tt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statics']->value['actividad']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tt']->key => $_smarty_tpl->tpl_vars['tt']->value) {
$_smarty_tpl->tpl_vars['tt']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['tt']->value['data']) {?><?php  $_smarty_tpl->tpl_vars['skd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tt']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skd']->key => $_smarty_tpl->tpl_vars['skd']->value) {
$_smarty_tpl->tpl_vars['skd']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['skd']->value['total'];?>
,<?php } ?><?php }?><?php } ?>]
        }, ]
};
var myLineChartact = new Chart(ctxglobalstatsact).Line(dataGlobalsact, options);
})
</script>
</div>
</div><?php }} ?>
