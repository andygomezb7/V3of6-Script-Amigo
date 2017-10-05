<?php
include ('../../header.php');

$tables = $_GET['table'];
$mda = $_GET['a'];
$submit = $_GET['sbmt'];
$key = substr(md5(rand(3, 10).'SE3CUR3C0D3'), 0, 12);

	/* CONTENT */
    $jksn = mysql_query("SHOW TABLES FROM wortit2");
	echo '<meta charset="utf-8" /><title>Page V1</title>';
	echo '<span>Gracias por entrar, Gracias a esta herramienta, podras mudar las bases de datos que quieras...</span><br />
     Te damos las bases de datos actuales...<br />
	';
	echo '<form action="" method="GET"><table><thead><tr>
    <td>Tablas de datos</td>
	</tr></thead><tbody>';
	echo '<tr><td>
	<select name="table">';
	while ($fila = mysql_fetch_row($jksn)) {
     echo '<option>'.$fila[0]."</option>";
    }
    echo '</select>
    </td>
    </tr>';
    echo '</tbody><tfoot><tr><td>Enviar: <input type="submit" value="Mostrar base de datos" name="action" /></td></tr></tfoot></table></form>';

if($tables){
$Sql2 ="DESCRIBE ".$tables;
$result2 = mysql_query( $Sql2 ) or die("No se puede ejecutar la consulta: ".mysql_error());
echo '
<h1>Tabla: '.$tables.'</h1>
<span>Recuerda que la base de datos que escojas a donde se mudara, deve de existir, sino se creara pero no se borrara la anterior por motivos de seguridad.</span>
<form action="" method="GET"><input type="hidden" name="table" value="'.$tables.'" /><table>
<thead>
<tr>
<td>Campo actual</td>
<td>Tipo :</td>
<td>¿ NULL ?</td>
<td>KEY</td>
<td>Mudar a</td>
<td>Borrar / Dejar</td>
</tr>
</thead>
';
echo '<tr><th colspan="4">'.$Rs[0].'</th></tr>';
//MOSTRAMOS LA INFORMACION DE LOS CAMPOS
while($Rs2 = mysql_fetch_array($result2)) {
echo '<tr>';
echo '<td>'.$Rs2['Field'].'</td>';
$ttnull = ($Rs2['Null'] == 'YES') ? 'NULL' : 'NOT NULL';
$ttkey = ($Rs2['Key'] == 'PRI') ? 'AUTO_INCREMENT' : '';
echo '<td width="25%"><input type="hidden" name="'.$Rs2['Field'].'ttype" value="'.$Rs2['Type'].'"/> '.$Rs2['Type'].'</td>';
echo '<td width="10%"><input type="hidden" name="'.$Rs2['Field'].'tnull" value="'.$ttnull.'"/> '.$ttnull.'</td>';
echo '<td width="10%"> <input type="hidden" name="'.$Rs2['Field'].'tkey" value="'.$ttkey.'"/> '.$ttkey.'</td>';
echo '<td><input type="text" name="'.$Rs2['Field'].'" placeholder="mudaras a"/><input type="hidden" name="campoje" value="'.$Rs2['Field'].'" /></td>';
echo '<td><select name="'.$Rs2['Field'].'type"><option value="1">Dejar</option><option value="0">Borrar</option></select></td>';
echo '</tr>';
}
echo '
<tfoot>
<tr><td><input type="text" name="a" placeholder="A que tabla la mudaras?" /><br /><input type="submit" name="sbmt" value="MUDAR" />
<input type="hidden" name="keyvale" value="'.$key.'" />
</td></tr>
</tfoot>
</table></form>';
}

if($submit && $submit == 'MUDAR'){
	$ttype = $_GET['ttype'];
	$tnull = $_GET['tnull'];
	$tkey = $_GET['tkey'];
	$ksndflk = $_GET['a'];
$queryexist = mysql_num_rows(mysql_query('SHOW TABLES LIKE '.$$tables.''));
if($queryexist == 1){
	$ksdflk = mysql_query("SELECT * FROM ".$tables."");
	while($row = mysql_fetch_assoc($ksdflk)){
		$SD2F4165 = result_array(mysql_query('DESCRIBE '.$tables.''));
		$S65DF8W = '';
		$sdklfnkw = '';
		foreach($SD2F4165 AS $je){
	    $S65DF8W .= (!$_GET[$je['Field']]) ? "''," : $_GET[$je['Field']].',';
	    $sdklfnkw .= (!$row[$je['Field']]) ? "''," : $row[$je['Field']].', ';
		}
		mysql_query("INSERT INTO `".$ksndflk."`(".$S65DF8W.") VALUES(".$sdklfnkw.")");
	}
	echo $sdklfnkw.$S65DF8W;
}else{
	$ksadlnwle = mysql_query('DESCRIBE '.$tables.'');
	$typesje = '';
	$typesjee = '';
	$jejecha = '';
	$jojocha = '';
	$campoje = $_GET['campoje'];
	$i = 0;
	$typesje65we = 'CREATE TABLE IF NOT EXISTS `'.$ksndflk.'`(';
	while($RTD = mysql_fetch_array($ksadlnwle)){
	$sflkwen = $_GET[$RTD['Field'].'type'];
	if($_GET[$RTD['Field'].'tkey'] == 'AUTO_INCREMENT'){ $sdjfnowejn = $_GET[$RTD['Field']]; }
	if($sflkwen == 0){}else{ 
	$typesje .= '`'.$_GET[$RTD['Field']].'` '.$_GET[$RTD['Field'].'ttype'].' '.$_GET[$RTD['Field'].'tnull'].' '.$_GET[$RTD['Field'].'tkey'].','; }
	$jejecha .= $_GET[$RTD['Field']].', ';
	$i++;
	}
	$typesjee .= ' PRIMARY KEY (`'.$sdjfnowejn.'`) ';
	$typesjee .= ') ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;';
	mysql_query($typesje65we.$typesje.$typesjee);
	$ksdflk = mysql_query("SELECT * FROM ".$tables."");
	while($row = mysql_fetch_assoc($ksdflk)){
		$SD2F4165 = result_array(mysql_query('DESCRIBE '.$tables.''));
		$S65DF8W = '';
		$sdklfnkw = '';
		foreach($SD2F4165 AS $je){
	    $S65DF8W .= (!$_GET[$je['Field']]) ? "''," : $_GET[$je['Field']].',';
	    $sdklfnkw .= (!$row[$je['Field']]) ? "''," : $row[$je['Field']].', ';
		}
		mysql_query("INSERT INTO `".$ksndflk."`(".$S65DF8W.") VALUES(".$sdklfnkw.")");
	}
	$s6s54df6 = mysql_num_rows(mysql_query('SHOW TABLES LIKE '.$ksndflk.''));
	if($s6s54df6 == 1){ echo 'Listo!!!<br />'; echo $typesje.$sdklfnkw.$S65DF8W; }else{ echo $typesje.$sdklfnkw.$S65DF8W; }
}
}

?>