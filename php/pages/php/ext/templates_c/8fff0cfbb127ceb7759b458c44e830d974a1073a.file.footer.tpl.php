<?php /* Smarty version Smarty-3.1.19, created on 2014-11-16 13:34:30
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\codigo_i\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246415453f4ed53ec69-38577366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fff0cfbb127ceb7759b458c44e830d974a1073a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\codigo_i\\footer.tpl',
      1 => 1415485978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246415453f4ed53ec69-38577366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453f4ed5b8d83_24479616',
  'variables' => 
  array (
    'tsConfig' => 0,
    'ejecution' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453f4ed5b8d83_24479616')) {function content_5453f4ed5b8d83_24479616($_smarty_tpl) {?><div class="::notfound::styleshets">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/table_1.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/sCrptTgs.js"></script>
<script type="text/javascript">
function tagsInput(){ $('#tagnew').tagsInput({ autocomplete_url: global_data.url+'/ajax/complete-tags.php?t=1' }); }
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/sCrptTgs.css" />
</div>
</div>
<footer>
<div class="::cons_::conn:stylesheets" role="stylesheets">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/icdg.css">
</div>
Esta pagina se ejecuto en <b><?php echo $_smarty_tpl->tpl_vars['ejecution']->value;?>
</b> segundos
</footer><?php }} ?>
