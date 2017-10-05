{if !$get_.hdrPott && $get_.hdrPott != 'httpost'}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta property="og:type" content="Social Network" />
<meta content="{$location}" property="og:url">
<link href="{$location}" rel="canonical">
<link rel="shortcut icon" href="{$tsConfig.direccion_url}/favicon.ico" type="image/x-icon"/>
<title>{$tsTitle}</title>
<meta name="title" content="{$tsTitle}">
<meta name="description" content="{$tsBodyp}">
<meta name="keywords" content="{$tsBodytags}">
<meta name="author" content="{$tsConfig.name}">
<meta http-equiv=="content-language" content="es">
<meta name="robots" content="all, index, follow, archive">
<meta name="googlebot" content="all, index, follow">
<meta name="yahoo-slurp" content="all, index, follow">
<meta name="msnbot" content="all, index, follow">
<meta name="revisit-after" content="1 day">
<meta property="og:title" content="{$tsTitle}">
<meta property="og:description" content="{$tsBodyp}">
<meta property="og:image" content="{$tsBodyi}"/>
<meta property="fb:page_id" content="402076533245521">
<meta property="fb:admins" content="100000141702335">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="{$tsTitle}">
<meta name="twitter:description" content="{$tsBodyp}">
<meta name="twitter:site" content="wort_it">
<meta property="twitter:image" content="{$tsBodyi}"/>

{* <link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css"> *}
<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="https://sites.google.com/site/wortsaljdr/normalize.css">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/StlsGbls.css">
{if $_SESSION}<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/CnfgrconsToUsrs.css">{/if}
{if $_SESSION}{if $_chat}<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/ChtsGblsHlp.css">{/if}{/if}
{if $tsPage}<link rel="stylesheet" href="{$tsConfig.direccion_url}/css/{$tsPage}.css" />{/if}
<script type="text/javascript" src="{$tsConfig.url}/js/jquery.min.js"></script>
{* <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script> *}
<script type="text/javascript" src="{$tsConfig.url}/js/PlgnsJqr.js"></script>
<script type="text/javascript" src="{$tsConfig.url}/js/CnfgrconsGblsIJs.js"></script>
{if $wuser->mod || $wuser->admod}<script type="text/javascript" src="{$tsConfig.url}/js/admode/AtnsAmd.js"></script>{/if}
{if $_SESSION}
<script type="text/javascript" src="{$tsConfig.url}/js/modo/plgnvcard.js"></script>
<script type="text/javascript" src="{$tsConfig.url}/js/UsrsLgads.js"></script>
{if $_chat}<script type="text/javascript" src="{$tsConfig.url}/js/ChtCntndrHlp.js"></script>{/if}{/if}
{if $tsPage}<script src="{$tsConfig.direccion_url}/js/{$tsPage}.js" type="text/javascript"></script>{/if}
{if !$_SESSION}<script type="text/javascript" src="{$tsConfig.url}/js/Annm.js"></script>{/if}
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/btns.css">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/efects.css">
<!---{if $tsPage == 'cuenta' || $tsPage == 'comunidades'}<script type="text/javascript" src="{$tsConfig.direccion_url}/js/jquery.color.js"></script>{/if}---->
	<script type="text/javascript">
    // {literal}
	var global_data = {
    // {/literal}
	    user_key: '{$u.usuario_id}',
        url:'{$tsConfig.direccion_url}',
        img:'{$u.w_avatar}',
		userid: '{$u.usuario_id}',
        user_name: '{$u.usuario_nombre}',
        numaccess: '{$numaccess}',
    // {literal}
    };

    $(window).load(function() {
    $('#loading').fadeOut('slow');
    $('body').css({'overflow':'visible'});
    })
    // {/literal}
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
{if $_SESSION}<div class="notification-board right bottom"></div>
{if $_chat && $_SESSION}{include file='includes/chat_user.tpl'}{/if}{/if}

<div id="ajax" style="display:none;"><input type="hidden" value="0" id="pagHome" /></div>

{if $nomenu == 'no' or $nomenu}{else}
{include file='includes/menu-left.tpl'}
{include file='includes/main_menu.tpl'}
{/if}
 <div id="headtotalhe"><div id="principalcont">
{/if}