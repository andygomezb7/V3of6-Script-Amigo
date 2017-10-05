<?php /* Smarty version Smarty-3.1.19, created on 2014-11-16 13:34:30
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\codigo_i\menu-left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192405453f4ed40d996-35908475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca115cd2dc3db8de55e700069affac709bcb9da4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\codigo_i\\menu-left.tpl',
      1 => 1415305408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192405453f4ed40d996-35908475',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453f4ed4c4b46_45138564',
  'variables' => 
  array (
    'tsRegis' => 0,
    's' => 0,
    'tsConfig' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453f4ed4c4b46_45138564')) {function content_5453f4ed4c4b46_45138564($_smarty_tpl) {?><div class="cdg-reposit-menu-left">
<ol>
<li class="cdg-reposit-title ttl_codde_repos1"><a href="#"><div>Repositorios</div></a> <div class="otip adds" onclick="cdg.resposit.add(1);" title="Crear repositorio">+</div></li>
<?php if ($_smarty_tpl->tpl_vars['tsRegis']->value) {?><?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsRegis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['s']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
<li class="cdg-li <?php if ($_smarty_tpl->tpl_vars['s']->value==0) {?>rpos_mos_ttu_1<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/proyecto-<?php echo $_smarty_tpl->tpl_vars['f']->value['uc_g_ident'];?>
/"><div><i class="icons-cdg carpeta floatL"></i> <?php echo $_smarty_tpl->tpl_vars['f']->value['uc_name'];?>
</div></a></li>
<?php } ?><?php } else { ?>
<li class="cdg-li rpos_mos_ttu_1"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/"><div><i class="icons-cdg carpeta floatL"></i> Repositorio de muestra</div></a></li>
<li class="cdg-reposit-alert rpos_mos_ttu_1"><a href="#"><div>No hay repositorios aún</div></a></li><?php }?>

<li class="cdg-reposit-title ttl_codde_tutos1"><a href="#"><div>Tutoriales</div></a></li>
<li class="cdg-li cco_mos_codet"><a href="#"><div><i class="icons-cdg sticky floatL"></i> Administrar cuenta</div></a></li>
<li class="cdg-li"><a href="#"><div><i class="icons-cdg sticky floatL"></i>Organizar repositorios</div></a></li>

<li class="cdg-reposit-title ttl_codde_otos1"><a href="#"><div>Otros</div></a></li>
<li class="cdg-reposit-alert"><a href="#"><div>No hay contenido aún</div></a></li>
</ol>
</div><?php }} ?>
