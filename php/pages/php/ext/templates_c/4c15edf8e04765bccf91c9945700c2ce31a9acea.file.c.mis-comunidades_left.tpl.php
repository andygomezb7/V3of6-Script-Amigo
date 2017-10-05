<?php /* Smarty version Smarty-3.1.19, created on 2017-02-11 15:42:02
         compiled from "/home/babanta/wortit.net/themes/default/comunidades/c.mis-comunidades_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767128204589f852a162040-41815281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c15edf8e04765bccf91c9945700c2ce31a9acea' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/comunidades/c.mis-comunidades_left.tpl',
      1 => 1393292426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767128204589f852a162040-41815281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsMisComus' => 0,
    'tsConfig' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589f852a484067_20969888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589f852a484067_20969888')) {function content_589f852a484067_20969888($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_limit')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.limit.php';
?><div class="com_members_filter clearfix">
	<ul class="cmf_select clearfix floatL">
        <li>Mostrando <strong><?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['van']>$_smarty_tpl->tpl_vars['tsMisComus']->value['total']) {?><?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['total'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['van'];?>
<?php }?></strong> resultados de <strong><?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['total'];?>
</strong></li>
    </ul>
    <ul class="cmf_select clearfix floatR">
    	<li>Ordenar por</li>
    	<li <?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['orden']=='nombre') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/mis-foros/nombre">Nombre</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['orden']=='rango') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/mis-foros/rango">Rango</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['orden']=='miembros') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/mis-foros/miembros">Miembros</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['orden']=='temas') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/mis-foros/temas">Temas</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['orden']=='fecha') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/mis-foros/fecha">Fecha</a></li>
    </ul>
</div>
<?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['pages']>1) {?>
<div class="com_pagination">
	<?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['prev']) {?><a class="cp_prev" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/mis-foros/<?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['orden'];?>
.<?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['prev'];?>
/"></a><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['pages']+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = (int) $_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['pages'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total']);
?>
    <a <?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['current']==$_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']) {?>class="here"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/mis-foros/<?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['orden'];?>
.<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
/"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
</a>
    <?php endfor; endif; ?>
    <?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['pages']>1&&$_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['pages']>$_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['current']) {?><a class="cp_next" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/mis-foros/<?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['orden'];?>
.<?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['next'];?>
/"></a><?php }?>
</div>
<?php }?>
<div id="com_members_result">
    <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsMisComus']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
    <div class="com_list_members clearfix">
    	<div class="clm_avatar floatL"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['m']->value['c_nombre_corto'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/files/uploads/c_<?php echo $_smarty_tpl->tpl_vars['m']->value['c_id'];?>
.jpg" width="75" height="75" /></a></div>
        <ul class="clm_info clearfix floatL">
        	<li><h4><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['m']->value['c_nombre_corto'];?>
/"><?php echo $_smarty_tpl->tpl_vars['m']->value['c_nombre'];?>
</a></h4></li>
            <li>Categor&iacute;a: <strong><?php echo $_smarty_tpl->tpl_vars['m']->value['categoria'];?>
</strong></li>
            <li title="<?php echo $_smarty_tpl->tpl_vars['m']->value['c_descripcion'];?>
"><?php echo smarty_modifier_limit($_smarty_tpl->tpl_vars['m']->value['c_descripcion'],85);?>
</li>
            <li>Miembros <strong><?php echo $_smarty_tpl->tpl_vars['m']->value['c_miembros'];?>
</strong> - Temas <strong><?php echo $_smarty_tpl->tpl_vars['m']->value['c_temas'];?>
</strong></li>
            <li>Mi rango: <strong><?php if ($_smarty_tpl->tpl_vars['m']->value['m_permisos']==5) {?>Administrador<?php } elseif ($_smarty_tpl->tpl_vars['m']->value['m_permisos']==4) {?>Moderador<?php } elseif ($_smarty_tpl->tpl_vars['m']->value['m_permisos']==3) {?>Posteador<?php } elseif ($_smarty_tpl->tpl_vars['m']->value['m_permisos']==2) {?>Comentador<?php } elseif ($_smarty_tpl->tpl_vars['m']->value['m_permisos']==1) {?>Visitante<?php }?></strong></li>
        </ul>
    </div>
    <?php } ?>
</div>
<?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['pages']>1) {?>
<div class="com_pagination">
	<?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['prev']) {?><a class="cp_prev" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/mis-foros/<?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['orden'];?>
.<?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['prev'];?>
/"></a><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['name'] = 'pages';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['pages']+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = (int) $_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['pages'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pages']['total']);
?>
    <a <?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['current']==$_smarty_tpl->getVariable('smarty')->value['section']['pages']['index']) {?>class="here"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/mis-foros/<?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['orden'];?>
.<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
/"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pages']['index'];?>
</a>
    <?php endfor; endif; ?>
    <?php if ($_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['pages']>1&&$_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['pages']>$_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['current']) {?><a class="cp_next" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/mis-foros/<?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['orden'];?>
.<?php echo $_smarty_tpl->tpl_vars['tsMisComus']->value['pages']['next'];?>
/"></a><?php }?>
</div>
<?php }?><?php }} ?>
