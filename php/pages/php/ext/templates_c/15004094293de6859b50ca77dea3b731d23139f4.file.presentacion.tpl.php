<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 13:40:25
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\presentacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193475470e9c6f05376-22777761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15004094293de6859b50ca77dea3b731d23139f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\presentacion.tpl',
      1 => 1416805635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193475470e9c6f05376-22777761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5470e9c6f05374_18088224',
  'variables' => 
  array (
    'u' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5470e9c6f05374_18088224')) {function content_5470e9c6f05374_18088224($_smarty_tpl) {?><h2 class="title">Administración global</h2>
<p>Hola <b>@<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
</b>, <?php if ($_smarty_tpl->tpl_vars['u']->value['user_sexo']==0) {?>Bienvenido<?php } else { ?>Bienvenida<?php }?> a la sala de administración global de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
.</p>
<br><br>
<h3 class="yellow">Recomendaciones</h3><br>
<ul class="lsn" style="margin: 0 0 0 21px;">
<li class="lsn">No debes abusar del poder que implica el ser Administrador.</li>
<li class="lsn">No debes discriminar a los usuarios por raza, edad, defectos o sexo.</li>
<li class="lsn">Debes hacer uso de buena ortograf&iacute;a en sus comunicados, mensajes, alertas etc.</li>
<li class="lsn">Debes orientar correctamente a los usuarios con inquietudes o dudas.</li>
<li class="lsn">Debes hacer lo posible porque el protocolo general sea respetado por los usuarios.</li>
<li class="lsn">Debes evitar que <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 sea blanco f&iacute;cil de spam, insultos, crap etc.</li>
<li class="lsn">Trata de mantener control de estad&iacute;sticas y acciones, en caso de encontrar una acción o bug reportar inmediatamente a los programadores.</li>
</ul>
<div class="sttr" role="sttr"><div>
<style type="text/css">
.lsn{list-style: inherit;font-size: 12px;
list-style-type: disc;
list-style-position: inside;
line-height: 28px;
color: rgb(90, 90, 90);}
</style>
</div></div><?php }} ?>
