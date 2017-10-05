<?php /* Smarty version Smarty-3.1.19, created on 2014-11-16 16:10:13
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\cuenta_i\estatics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148435469088194c5f6-94729204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21b19209e4021b6ab8a0b60779c4faf101a55435' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\cuenta_i\\estatics.tpl',
      1 => 1416175810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148435469088194c5f6-94729204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5469088194c5f1_96629147',
  'variables' => 
  array (
    'tsConfig' => 0,
    'stat' => 0,
    'fdf' => 0,
    'kk' => 0,
    'fd' => 0,
    's' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5469088194c5f1_96629147')) {function content_5469088194c5f1_96629147($_smarty_tpl) {?><div id="error_flat" class="blue_flat"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/info.png"/> Las estadisticas estaran listas en unos dias, mientras tu y todos los registrados en Wortit, generen contenido y actividad.<br>A generar contenido!</div>
<!---<div class="u_account_stats">
<div>
<div><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/code/Chart.js"></script><div>
<script type="text/javascript">
var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
var barChartData = {
labels : [<?php  $_smarty_tpl->tpl_vars['fdf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fdf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fdf']->key => $_smarty_tpl->tpl_vars['fdf']->value) {
$_smarty_tpl->tpl_vars['fdf']->_loop = true;
?>"<?php echo $_smarty_tpl->tpl_vars['fdf']->value['title'];?>
",<?php } ?>],
datasets : [{
fillColor : "rgba(220,220,220,0.5)",
strokeColor : "rgba(220,220,220,0.8)",
highlightFill: "rgba(220,220,220,0.75)",
highlightStroke: "rgba(220,220,220,1)",
data : [<?php  $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kk']->key => $_smarty_tpl->tpl_vars['kk']->value) {
$_smarty_tpl->tpl_vars['kk']->_loop = true;
?><?php  $_smarty_tpl->tpl_vars['fd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kk']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fd']->key => $_smarty_tpl->tpl_vars['fd']->value) {
$_smarty_tpl->tpl_vars['fd']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['fd']->value['total'];?>
,<?php } ?><?php } ?>] }, {
fillColor : "rgba(151,187,205,0.5)",
strokeColor : "rgba(151,187,205,0.8)",
highlightFill : "rgba(151,187,205,0.75)",
highlightStroke : "rgba(151,187,205,1)",
data : [<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?><?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['f']->value['total'];?>
,<?php } ?><?php } ?>] }
]
}

window.onload = function(){
var ctx = document.getElementById("bworts").getContext("2d");
window.myBar = new Chart(ctx).Bar(barChartData, {
responsive : true
});
}
</script>
</div></div>
</div>
<div class="u_accound_count">
<div><canvas id="bworts" height="450" width="600"></canvas></div>
</div>
</div>---><?php }} ?>
