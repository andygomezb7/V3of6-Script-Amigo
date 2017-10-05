<?php
/*
*
*    @name home.php
*    Controlador de la Home
*
*/
  
include '../../header.php';

/*
*---------------------------------------------------------------------
*       VARIABLES POR DEFECTO
*---------------------------------------------------------------------
*/

$tsPage = "calendario";
$tsTitle = 'Calendario | '.$w->settings['name'];
$tsLevel = 0;
$tsAjax = empty($_GET['ajax']) ? 0 : 1;

/*
*-----------------------------------------------------------------------
*      VARIABLES DE ACCESO
*-----------------------------------------------------------------------
*/

//Meta Descripcion
$tsBodyp = $w->settings['name']." Calendario | Organiza y mantente al tanto de los eventos importantes, Tanto tuyos como de tus amigos, Hasta eventos internacionales y nacionales. - ¡Entra ya! ".$w->settings['name'].'.net/int/calendario/';
//Meta Tags
$tsBodytags = $w->settings['name'].", calendario, eventos, notas, foro, temas, games, juegos, downloads, mega, descarga, peliculas, musica";
//Meta Imagen
$tsBodyi = $w->settings['url'].'/images/avatar/group2.png';
//Meta Url
$tsUrl = $w->settings['url'];

/* VARIABLES PRINCIPALES */
# definimos los valores iniciales para nuestro calendario
$month = (empty($_GET['mes'])) ? date("n") : $_GET['mes'];
$year = (empty($_GET['year'])) ? date("Y") : $_GET['year'];
$dia = (empty($_GET['dia'])) ? 0 : $_GET['dia'];
$diaActual = date("j");
$yearaa = date("Y");
$eve565['usuarios'] = $_GET['gevents'];
$eve565['cumples'] = $_GET['cumple'];
if($month < 10 or $month == 9){ $moner = '0'.$month; }else{ $moner = $month; }
# Meses
$meses = array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");



if($dia <= 0){
/* INICIAMOS LA CREACION DE LOS DIAS, SEMANAS DENTRO DE UN MES POR MEDIO DE UN BUCLE */
	# Obtenemos el dia de la semana del primer dia
	# Devuelve 0 para domingo, 6 para sabado
	$diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7; 
	# Obtenemos el ultimo dia del mes
	$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));
	# En que semana empieza
	$inicio = ($diaSemana >= 8) ? 8 : 1;
	# Indice de ultima celda a usar en la tabla
	$last_cell=$diaSemana+$ultimoDiaMes;
	// hacemos un bucle hasta 42, que es el máximo de valores que puede haber... 6 columnas de 7 dias
$html = '<tr>';
for($i=$inicio;$i<=42;$i++) {
// determinamos en que dia empieza
if($i==$diaSemana) { $day=1; }
if($i<$diaSemana || $i>=$last_cell) { $html .= '<td class="vacio"></td>';
}else{
if($day < 10 or $day == 9){ $dayaa = '0'.$day; }else{ $dayaa = $day; }

$query = mysql_query('SELECT w_avatar, usuario_id, usuario_nombre, '.$yearaa.'-nac_anio AS nac_anio FROM usuarios WHERE nac_mes = \''.$moner.'\' AND nac_dia = \''.$dayaa.'\'');
$cumpleanos = result_array($query);


$msow5879 = ($eve565['usuarios'] == 1) ? '' : 'AND e_user=\''.$wuser->uid.'\'';
$query = mysql_query('SELECT e_titulo, e_privado, e_user FROM e_eventos WHERE e_mes = \''.$month.'\' AND e_dia = \''.$day.'\' AND e_year = \''.$year.'\' '.$msow5879.'');
$eventos = result_array($query);

# Es hoy o tu cumpleaños?
$html .='<td'.(($day==$diaActual && date("n") == $month && date("Y") == $year) ? ' class="hoy"' : '').'  '.(($dayaa==$wuser->info['nac_dia'] && $moner == $wuser->info['nac_mes']) ? ' class="cumple"' : '').'>';
# Dia
$html .= '<a class="c_day" href="'.$w->settings['url'].'/int/calendario/?preg=eventos&dia='.$day.'&mes='.$month.'&year='.$year.'">'.$day.'</a>';

# Eventos
if(count($eventos) >= 4) {
$html .= '<div><a href="'.$w->settings['url'].'/int/calendario/?preg=eventos&dia='.$day.'&mes='.$month.'&year='.$year.'">('.count($eventos).') Eventos</a></div>
';
}else{
foreach($eventos as $key => $val){
if($val['e_privado'] == 1 || $val['e_user'] == $_SESSION['uid']) {
$titulo = strlen($val['e_titulo']) > 25 ? substr($val['e_titulo'], 0, 20).'...' : $val['e_titulo'];
$html .= '<div><a class="qtip" href="'.$w->settings['url'].'/int/calendario/?preg=eventos&dia='.$day.'&mes='.$month.'&year='.$year.'" title="'.$val['e_titulo'].'">'.$titulo.'</a></div>';
}
}
}

# Cumpleanos
if($eve565['cumples'] == 1){
if(count($cumpleanos) >= 4) {
$html .= '<div><a href="'.$w->settings['url'].'/int/calendario/?preg=eventos&dia='.$day.'&mes='.$month.'&year='.$year.'">('.count($cumpleanos).') Cumplea&ntilde;os</a></div>';
}else{
foreach($cumpleanos as $key => $val){
$palabra1s = ($val['nac_anio'] == 1) ? 'a&ntilde;o' : 'a&ntilde;os';
$html .= '<div><a class="qtip" href="'.$w->settings['url'].'/'.$val['usuario_nombre'].'" title="'.$val['nac_anio'].' '.$palabra1s.'">'.$val['usuario_nombre'].'</a></div>';
}
}
}

$html .= '</td>';
$day++;
}
// cuando llega al final de la semana, iniciamos una columna nueva
if($i%7==0) { $html .= '</tr><tr>'; }
}
$html .= '</tr>';	
$smarty->assign('html', $html);
/* FINALIZAMOS EL BUCLE */
}else{

}

$smarty->assign("tsTitle",$tsTitle);
$smarty->assign("tsBodyp", $tsBodyp);
$smarty->assign("tsBodytags", $tsBodytags);
$smarty->assign("tsBodyi", $tsBodyi);
$smarty->assign("tsUrl", $tsUrl);
$smarty->assign("Dia",$dia);
$smarty->assign("Month",$month);
$smarty->assign("Mes",$meses[$month]);
$smarty->assign("Meses",$meses);
$smarty->assign("Year",$year);
$smarty->assign("Year_a",date("Y"));
$smarty->assign('_PREG', $get_['preg']);
$smarty->assign('_PREF', $get_['pref']);
$smarty->assign('mostrar', $eve565);

if($_SESSION['uid']){ $w->visitasAdd(1, 46); }else{ 
$w->visitasAdd(1, 47); 
}

/*
*
*   INCLUDE FINAL
*/
include(TS_ROOT."/footer.php");
?>