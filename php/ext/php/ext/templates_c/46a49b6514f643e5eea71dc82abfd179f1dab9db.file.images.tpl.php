<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 19:25:01
         compiled from "C:\xampp\htdocs\w\themes\default\ajax_files\perfil\images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19504545d2cfad59f87-66879534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a49b6514f643e5eea71dc82abfd179f1dab9db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\ajax_files\\perfil\\images.tpl',
      1 => 1415394332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19504545d2cfad59f87-66879534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545d2cfaf05375_54772218',
  'variables' => 
  array (
    'st' => 0,
    'm' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545d2cfaf05375_54772218')) {function content_545d2cfaf05375_54772218($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><style type="text/css">

.juego{
float: left;
margin: 5px;
width: 146px;
height: 146px;
overflow: hidden;
position: relative;
border-radius: 5px;
}
.juego a #ptitle{
background: rgba(0, 0, 0, 0.39);
text-align: center;
display: block;
width: 146px;
text-shadow: black 0 1px 0;
top: -28px;
color: white;
position: absolute;
z-index: 3;
padding: 5px 3px;
font-size: 10px;
font-family: 'Asap', sans-serif;
opacity: 0;
-webkit-transition: all 0.2s ease-in-out;
-moz-transition: all 0.2s ease-in-out;
}
.juego:hover #ptitle {
top: 0;
opacity: 0.9;
}
.juego a #pimage{
background-size: 146px 146px;
background-repeat: no-repeat;
width: 146px;
height: 146px;
border-radius: 5px;
z-index: 2;
position: relative;
-webkit-transition: all 0.2s ease-in-out;
-moz-transition: all 0.2s ease-in-out;
box-shadow: inset 0 0 0 1px #000,inset 0 -1px 0 rgba(0,0,0,0.2),inset 0 2px 0 rgba(255,255,255,0.2),inset 0 0 0 2px rgba(255,255,255,0.05),0 1px 0 rgba(0,0,0,0.15);
-moz-box-shadow: inset 0 0 0 1px #000,inset 0 -1px 0 rgba(0,0,0,0.2),inset 0 2px 0 rgba(255,255,255,0.2),inset 0 0 0 2px rgba(255,255,255,0.05),0 1px 0 rgba(0,0,0,0.15);
-webkit-box-shadow: inset 0 0 0 1px #000,inset 0 -1px 0 rgba(0,0,0,0.2),inset 0 2px 0 rgba(255,255,255,0.2),inset 0 0 0 2px rgba(255,255,255,0.05),0 1px 0 rgba(0,0,0,0.15);
}
.juego a #play{
background: rgba(0, 0, 0, 0.39);
text-align: center;
display: block;
text-shadow: black 0 1px 0;
bottom: 0px;
color: white;
position: absolute;
z-index: 3;
padding: 5px 3px;
font-size: 10px;
font-family: 'Asap', sans-serif;
-webkit-transition: all 0.2s ease-in-out;
-moz-transition: all 0.2s ease-in-out;
}
.juego a #ploader{
z-index: 1;
left: 0;
margin: auto;
top: 0;
bottom: 0;
right: 0;
display: block;
position: absolute;
}
#avtimages{
overflow: hidden;
border: 1px solid #d8d8d8;
border-radius: 3px;
background: #fff;
padding: 20px 20px;
display: inline-block;
width: 92%;
margin: 9px 0px 0px 0px;
}

</style>

<div id="avtimages">
<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['st']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
<div class="juego">
<a onclick="mydialog.alert('<?php echo $_smarty_tpl->tpl_vars['m']->value['up_vname'];?>
', '<center><img src=\'<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/arc/co/<?php echo $_smarty_tpl->tpl_vars['m']->value['up_code'];?>
.<?php echo $_smarty_tpl->tpl_vars['m']->value['up_ftype'];?>
\' style=\'max-width: 700px;max-height: 500px;\'/></center>');" target="_blank">
<div id="ptitle">Foto <?php echo $_smarty_tpl->tpl_vars['m']->value['up_ftype'];?>
</div>
<div id="play"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['m']->value['up_date']);?>
</div>
<img id="ploader" src="http://i.imgur.com/jeZo4Pm.gif">
<div id="pimage" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/146/146/?file=<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/arc/co/<?php echo $_smarty_tpl->tpl_vars['m']->value['up_code'];?>
.<?php echo $_smarty_tpl->tpl_vars['m']->value['up_ftype'];?>
');"></div>
</a>
</div>
<?php } ?>
</div><?php }} ?>
