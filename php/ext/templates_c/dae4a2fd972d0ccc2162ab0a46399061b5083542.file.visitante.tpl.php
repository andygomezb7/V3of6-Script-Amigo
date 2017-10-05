<?php /* Smarty version Smarty-3.1.19, created on 2017-01-10 21:30:13
         compiled from "./themes/default/modulos/home_i/visitante.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1830706185875a6c5010f24-93406647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dae4a2fd972d0ccc2162ab0a46399061b5083542' => 
    array (
      0 => './themes/default/modulos/home_i/visitante.tpl',
      1 => 1418608046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1830706185875a6c5010f24-93406647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875a6c501ab74_18168952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875a6c501ab74_18168952')) {function content_5875a6c501ab74_18168952($_smarty_tpl) {?><div class="loggHom">
<div class="cntntHmLgg">
<div class="tltHmLgg">
	<h1>Interactua con los demás.</h1>
    <div>Inicia Sesión en Wortit</div>
	</div>
<div class="cntndrHmLgg">
<form width="100%" method="" action="">
<div class="DvsCntndrLggsi">
<input type="text" class="usrlgg" placeholder="Nombre de usuario" style="border-bottom-width: 0px;">
<input type="password" class="pasurslgg" placeholder="Tu Contraseña">
<input type="button" value="Iniciar Sesión" class="logg">
</div>
</form>
</div>
</div>
<div style="margin: 42px 0 0 0;"><a style="display:block;" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/login/facebook/"><div class="facebook-login cursorP"></div></a><br><h1 id="fb-welcome"></h1></div>
<div class="::sttr" role="sttr">
<div><style type="text/css">
.facebook-login{background-image: url(https://Wortit.net/images/bg/social.png);background-position: -150px 0px;width: 150px;height: 22px;display: block;position: relative;margin: 0 auto;}
.facebook-login:hover{background-position: -150px -22px;}
.facebook-login:active{background-position: -150px -44px;}
</style>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '866978713315645',
      xfbml      : true,
      version    : 'v2.2'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

// Place following code after FB.init call.

function onLogin(response) {
  if (response.status == 'connected') {
    FB.api('/me?fields=first_name', function(data) {
      var welcomeBlock = document.getElementById('fb-welcome');
      welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
    });
  }
}

FB.getLoginStatus(function(response) {
  // Check login status on load, and if the user is
  // already logged in, go directly to the welcome message.
  if (response.status == 'connected') {
    onLogin(response);
  } else {
    // Otherwise, show Login dialog first.
    FB.login(function(response) {
      onLogin(response);
    }, {scope: 'user_friends, email'});
  }
});

</script>
</div>
</div>
</div><?php }} ?>
