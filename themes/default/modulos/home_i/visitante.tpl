<div class="loggHom">
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
<div style="margin: 42px 0 0 0;"><a style="display:block;" href="{$tsConfig.url}/login/facebook/"><div class="facebook-login cursorP"></div></a><br><h1 id="fb-welcome"></h1></div>
<div class="::sttr" role="sttr">
<div><style type="text/css">{literal}
.facebook-login{background-image: url(https://Wortit.net/images/bg/social.png);background-position: -150px 0px;width: 150px;height: 22px;display: block;position: relative;margin: 0 auto;}
.facebook-login:hover{background-position: -150px -22px;}
.facebook-login:active{background-position: -150px -44px;}
{/literal}</style>
<script>{literal}
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

{/literal}</script>
</div>
</div>
</div>