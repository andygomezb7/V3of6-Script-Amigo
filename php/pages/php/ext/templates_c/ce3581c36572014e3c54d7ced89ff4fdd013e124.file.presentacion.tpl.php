<?php /* Smarty version Smarty-3.1.19, created on 2017-01-15 23:00:29
         compiled from "/home/babanta/wortit.net/themes/default/modulos/admin_i/presentacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307731053587c536dab6793-38579011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce3581c36572014e3c54d7ced89ff4fdd013e124' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/admin_i/presentacion.tpl',
      1 => 1416802036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307731053587c536dab6793-38579011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'u' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587c536dacecd4_24665628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c536dacecd4_24665628')) {function content_587c536dacecd4_24665628($_smarty_tpl) {?><h2 class="title">Administración global</h2>
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
