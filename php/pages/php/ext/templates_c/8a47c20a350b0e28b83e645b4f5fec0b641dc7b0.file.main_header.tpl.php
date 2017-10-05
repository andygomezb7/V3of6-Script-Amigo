<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:16:11
         compiled from "/home/babanta/wortit.net/themes/default/includes/main_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15448842095875a37b5b6bd2-91624012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a47c20a350b0e28b83e645b4f5fec0b641dc7b0' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/includes/main_header.tpl',
      1 => 1482780852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15448842095875a37b5b6bd2-91624012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'get_' => 0,
    'location' => 0,
    'tsConfig' => 0,
    'tsTitle' => 0,
    'tsBodyp' => 0,
    'tsBodytags' => 0,
    'tsBodyi' => 0,
    '_SESSION' => 0,
    '_chat' => 0,
    'tsPage' => 0,
    'wuser' => 0,
    'u' => 0,
    'numaccess' => 0,
    'nomenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a37b6a5537_25862393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a37b6a5537_25862393')) {function content_5875a37b6a5537_25862393($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['get_']->value['hdrPott']&&$_smarty_tpl->tpl_vars['get_']->value['hdrPott']!='httpost') {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta property="og:type" content="Social Network" />
<meta content="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
" property="og:url">
<link href="<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
" rel="canonical">
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/favicon.ico" type="image/x-icon"/>
<title><?php echo $_smarty_tpl->tpl_vars['tsTitle']->value;?>
</title>
<meta name="title" content="<?php echo $_smarty_tpl->tpl_vars['tsTitle']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['tsBodyp']->value;?>
">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['tsBodytags']->value;?>
">
<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
">
<meta http-equiv=="content-language" content="es">
<meta name="robots" content="all, index, follow, archive">
<meta name="googlebot" content="all, index, follow">
<meta name="yahoo-slurp" content="all, index, follow">
<meta name="msnbot" content="all, index, follow">
<meta name="revisit-after" content="1 day">
<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['tsTitle']->value;?>
">
<meta property="og:description" content="<?php echo $_smarty_tpl->tpl_vars['tsBodyp']->value;?>
">
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['tsBodyi']->value;?>
"/>
<meta property="fb:page_id" content="402076533245521">
<meta property="fb:admins" content="100000141702335">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['tsTitle']->value;?>
">
<meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['tsBodyp']->value;?>
">
<meta name="twitter:site" content="wort_it">
<meta property="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['tsBodyi']->value;?>
"/>


<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://sites.google.com/site/wortsaljdr/normalize.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/StlsGbls.css">
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/CnfgrconsToUsrs.css"><?php }?>
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?><?php if ($_smarty_tpl->tpl_vars['_chat']->value) {?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/ChtsGblsHlp.css"><?php }?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['tsPage']->value) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/css/<?php echo $_smarty_tpl->tpl_vars['tsPage']->value;?>
.css" /><?php }?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/PlgnsJqr.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/CnfgrconsGblsIJs.js"></script>
<?php if ($_smarty_tpl->tpl_vars['wuser']->value->mod||$_smarty_tpl->tpl_vars['wuser']->value->admod) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/admode/AtnsAmd.js"></script><?php }?>
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/plgnvcard.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/UsrsLgads.js"></script>
<?php if ($_smarty_tpl->tpl_vars['_chat']->value) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/ChtCntndrHlp.js"></script><?php }?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['tsPage']->value) {?><script src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/js/<?php echo $_smarty_tpl->tpl_vars['tsPage']->value;?>
.js" type="text/javascript"></script><?php }?>
<?php if (!$_smarty_tpl->tpl_vars['_SESSION']->value) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/Annm.js"></script><?php }?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/btns.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/efects.css">
<!---<?php if ($_smarty_tpl->tpl_vars['tsPage']->value=='cuenta'||$_smarty_tpl->tpl_vars['tsPage']->value=='comunidades') {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/js/jquery.color.js"></script><?php }?>---->
	<script type="text/javascript">
    // 
	var global_data = {
    // 
	    user_key: '<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_id'];?>
',
        url:'<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
',
        img:'<?php echo $_smarty_tpl->tpl_vars['u']->value['w_avatar'];?>
',
		userid: '<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_id'];?>
',
        user_name: '<?php echo $_smarty_tpl->tpl_vars['u']->value['usuario_nombre'];?>
',
        numaccess: '<?php echo $_smarty_tpl->tpl_vars['numaccess']->value;?>
',
    // 
    };

    $(window).load(function() {
    $('#loading').fadeOut('slow');
    $('body').css({'overflow':'visible'});
    })
    // 
    </script>	
</head>

<body>
<!------ <a href="#" class="scrolltop" style="display: inline;"></a> ---------->
<div id="loading" class="dsnone"><div class="content"><div class="bbos"><div class="titl brO">Cargando...</div></div></div></div>
<div id="swf"></div>
<div id="js" class="dsnone"></div>
<ul id="SDF65Sf19" class="stsnarh dsnone"> <div id="prn"><li class="first"><a class="active">Abrir aqui</a></li> <li><a class="active" target="_blank">Abrir en otra ventana</a></li></div></ul>
<div id="mask"></div>
<div id="mydialog"></div>
<div id="js_send"><input type="hidden" name="liveNotifs" value="0" /><input type="hidden" name="liveMsg" value="0" /></div>
<div id="alerts"></div>
<div id="ejects" class="dsnone"><ul></ul></div>
<?php if ($_smarty_tpl->tpl_vars['_SESSION']->value) {?><div class="notification-board right bottom"></div>
<?php if ($_smarty_tpl->tpl_vars['_chat']->value&&$_smarty_tpl->tpl_vars['_SESSION']->value) {?><?php echo $_smarty_tpl->getSubTemplate ('includes/chat_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php }?>

<div id="ajax" style="display:none;"><input type="hidden" value="0" id="pagHome" /></div>

<?php if ($_smarty_tpl->tpl_vars['nomenu']->value=='no'||$_smarty_tpl->tpl_vars['nomenu']->value) {?><?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ('includes/menu-left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('includes/main_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
 <div id="headtotalhe"><div id="principalcont">
<?php }?><?php }} ?>
