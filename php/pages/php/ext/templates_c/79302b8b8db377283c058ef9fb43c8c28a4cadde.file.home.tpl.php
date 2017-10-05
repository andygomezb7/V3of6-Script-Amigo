<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 22:06:50
         compiled from "/home/babanta/wortit.net/themes/default/modulos/soporte_i/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2629110225875af5ab9b721-88985047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79302b8b8db377283c058ef9fb43c8c28a4cadde' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/soporte_i/home.tpl',
      1 => 1418264314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2629110225875af5ab9b721-88985047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ult' => 0,
    'tsConfig' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875af5abc2940_40164652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875af5abc2940_40164652')) {function content_5875af5abc2940_40164652($_smarty_tpl) {?> <article style="width: 94%;margin: 0px auto;">
   <div id="ubc_frs">
   	 <div id="list_ubc">
      <ul>
     <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ult']->value['proy']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/soporte/<?php echo $_smarty_tpl->tpl_vars['f']->value['sf_seo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['f']->value['sf_desc'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['f']->value['sf_img'];?>
" style="width: 64px;height: 64px;"/>
        <h3><?php echo $_smarty_tpl->tpl_vars['f']->value['sf_name'];?>
</h3>
        <div>
          <div class="floatL" style="padding: 5px 3px;"><?php echo $_smarty_tpl->tpl_vars['f']->value['temas'];?>
 <div class="color_gray size11">Temas</div></div>
          <div class="floatR" style="padding: 5px 1px;"><?php echo $_smarty_tpl->tpl_vars['f']->value['res'];?>
 <div class="color_gray size11">Respuestas</div></div>
        </div>
        </a>
      </li>
       <?php } ?>
     </ul>
   </div>
 </div>
<div class="::stylesheets::">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/sup_home.css"></div>
</div>
 </article><?php }} ?>
