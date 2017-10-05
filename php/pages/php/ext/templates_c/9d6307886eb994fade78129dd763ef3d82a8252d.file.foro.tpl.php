<?php /* Smarty version Smarty-3.1.19, created on 2014-11-18 21:03:19
         compiled from "C:\xampp\htdocs\w\themes\default\foro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16410545447dc6ea053-45286273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d6307886eb994fade78129dd763ef3d82a8252d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\foro.tpl',
      1 => 1410905970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16410545447dc6ea053-45286273',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545447dcb34a77_94650788',
  'variables' => 
  array (
    'tsCom' => 0,
    'tsTema' => 0,
    'tsAction' => 0,
    '_SESSION' => 0,
    'tsFavoritos' => 0,
    'tsBorradores' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545447dcb34a77_94650788')) {function content_545447dcb34a77_94650788($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/main_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<script type="text/javascript">
    // 
    var global_com = {
    // 
        comid:'<?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_id'];?>
',
        temaid:'<?php echo $_smarty_tpl->tpl_vars['tsTema']->value['t_id'];?>
',
    // 
    };
    // 
    </script>		 
	<!--- <body style="<?php if ($_smarty_tpl->tpl_vars['tsCom']->value['c_id']) {?>background-color: <?php echo $_smarty_tpl->tpl_vars['tsCom']->value['c_back_color'];?>
;<?php } else { ?>background-color: #525252;<?php }?>background-repeat: <?php if ($_smarty_tpl->tpl_vars['tsCom']->value['c_back_repeat']) {?>repeat<?php } else { ?>no-repeat<?php }?>;"> ------>
    <?php if ($_smarty_tpl->tpl_vars['tsTema']->value['t_estado']==1) {?>
    <div class="com_bigmsj_red">Este tema est&aacute; eliminado</div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['tsAction']->value=='newhome') {?>
       <!------ <div class="com_left"> <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.inicio_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div> <div class="com_right">          <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.inicio_center.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </div> ------>
    <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.home.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value==''||$_smarty_tpl->tpl_vars['tsAction']->value=='home') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.inicio_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.inicio_center.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.home_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='crear'||$_smarty_tpl->tpl_vars['tsAction']->value=='editar') {?>  
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>	
		<form action="" method="post" id="add_new_com" enctype="multipart/form-data">
            <div class="com_left">
            	<?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.crear_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
            <div class="com_right">
            	<?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.crear_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </form>
		<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ('t.session.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='agregar'||$_smarty_tpl->tpl_vars['tsAction']->value=='editar-tema') {?>
	<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>
    	<?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.agregar_tema.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ('t.session.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='tema') {?>
    	<div class="com_left" style="float: right !important;border-left: 1px solid #CCCCCC;">
            <div style="display:none;"><?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.com_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.tema_cuerpo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.tema_comentarios.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="com_right" style="float: right !important;padding: 3px;margin-right: 21px;">
        	<?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.tema_autor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='mis-foros') {?>
    	<div class="com_left">
            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.mis-comunidades_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="com_right">
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='miembros') {?>
    	<div class="com_left">
            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.miembros_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="com_right">
        	<?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.miembros_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='dir') {?>
    	<div class="com_left">
	    	<?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.directorio_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="com_right">
	    	<?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.directorio_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='mod-history') {?>
	    <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.historial.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='com-mod-history') {?>
	    <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.com_historial.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='buscar') {?>
        <div class="com_left">
            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.buscar_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="com_right">
            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.buscar_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
	<?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='favoritos') {?>
    	<?php if ($_smarty_tpl->tpl_vars['tsFavoritos']->value['data']) {?>
        <div class="com_left">
            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.favoritos_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="com_right">
            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.favoritos_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <?php } else { ?>
        <div class="com_bigmsj_blue">No has agregado temas a tus favoritos a&uacute;n</div>
        <br>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tsAction']->value=='borradores') {?>
    	<?php if ($_smarty_tpl->tpl_vars['tsBorradores']->value['data']) {?>
        <div class="com_left">
            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.borradores_left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="com_right">
            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.borradores_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <?php } else { ?>
        <div class="com_bigmsj_blue">No tienes ning&uacute;n borrador a&uacute;n</div>
        <br>
        <?php }?>
    <?php } else { ?>
        <div class="com_left">
            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.com_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.com_temas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="com_right">
        	<?php echo $_smarty_tpl->getSubTemplate ('comunidades/c.com_right.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    <?php }?>

	<div style="width: 72%; float: right;" id="DNFakdqwok">
<script>

(adsbygoogle = window.adsbygoogle || []).push({});

</script>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ('includes/main_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
