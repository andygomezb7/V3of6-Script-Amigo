<div class="no_regis">
<div class="no_regis_content">
<div class="no_regis_header">
<h1>¿No te has unido a nuestra comunidad estudiantil?</h1>
<h4>Establecimientos  -  Profesores  -  Estudiantes</h4>
<h3 class="btn">Unirme
<ul id="SDF65Sf19" class="unirme_toolt" style="margin: 21px 0 0 0;"> 
<div class="tool"></div>
<div id="prn">
{if $_SESSION}
<li class="first"><a class="active" onclick="r_a.student_prof(1, 2)">Profesor</a></li> 
<li class="first"><a class="active" onclick="r_a.student_prof(1, 1)">Estudiante</a></li>
<li><a onclick="r_a.sestablishment(1, 3)">Establecimiento</a></li>
{else}
<li class="first"><a class="active" href="{$tsConfig.url}/">Iniciar sesión</a></li> 
<li><a href="{$tsConfig.url}/registro/">Registrarme</a></li>
{/if}
</div>
</ul>
</h3>
</div>

<div class="no_regis_contet_xtas::">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/aula.css">
<script type="text/javascript" src="{$tsConfig.url}/js/modo/regis_aula.js"></script>
<style type="text/css">{literal} .aula_con{background: inherit!important;} {/literal}</style>
</div>
</div>
</div>