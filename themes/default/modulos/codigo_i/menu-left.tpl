<div class="cdg-reposit-menu-left">
<ol>
<li class="cdg-reposit-title ttl_codde_repos1"><a href="#"><div>Repositorios</div></a> <div class="otip adds" onclick="cdg.resposit.add(1);" title="Crear repositorio">+</div></li>
{if $tsRegis}{foreach from=$tsRegis item=f key=s}
<li class="cdg-li {if $s == 0}rpos_mos_ttu_1{/if}"><a href="{$tsConfig.url}/int/codigo/p/proyecto-{$f.uc_g_ident}/"><div><i class="icons-cdg carpeta floatL"></i> {$f.uc_name}</div></a></li>
{/foreach}{else}
<li class="cdg-li rpos_mos_ttu_1"><a href="{$tsConfig.url}/int/codigo/"><div><i class="icons-cdg carpeta floatL"></i> Repositorio de muestra</div></a></li>
<li class="cdg-reposit-alert rpos_mos_ttu_1"><a href="#"><div>No hay repositorios aún</div></a></li>{/if}

<li class="cdg-reposit-title ttl_codde_tutos1"><a href="#"><div>Tutoriales</div></a></li>
<li class="cdg-li cco_mos_codet"><a href="#"><div><i class="icons-cdg sticky floatL"></i> Administrar cuenta</div></a></li>
<li class="cdg-li"><a href="#"><div><i class="icons-cdg sticky floatL"></i>Organizar repositorios</div></a></li>

<li class="cdg-reposit-title ttl_codde_otos1"><a href="#"><div>Otros</div></a></li>
<li class="cdg-reposit-alert"><a href="#"><div>No hay contenido aún</div></a></li>
</ol>
</div>