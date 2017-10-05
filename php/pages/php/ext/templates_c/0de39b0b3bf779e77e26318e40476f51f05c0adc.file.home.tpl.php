<?php /* Smarty version Smarty-3.1.19, created on 2014-12-10 21:18:40
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\soporte_i\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1178954540a6e0b71b2-34900907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0de39b0b3bf779e77e26318e40476f51f05c0adc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\soporte_i\\home.tpl',
      1 => 1418267913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1178954540a6e0b71b2-34900907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54540a6e16e360_09499179',
  'variables' => 
  array (
    'ult' => 0,
    'tsConfig' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54540a6e16e360_09499179')) {function content_54540a6e16e360_09499179($_smarty_tpl) {?> <article style="width: 94%;margin: 0px auto;">
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
