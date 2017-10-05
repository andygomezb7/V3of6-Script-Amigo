<?php if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo al script');

/**
 * Modelo para el control del chat
 *
 * @name    c.chat.php
 * @author  TRON
 */

class tsChat  {

   // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsChat();
        }
        return $instance;
    }

/////////////////////////////////////////////////////////////////

/*
		newEnv()  ENVIAMOS UN MENSAJE
		
	*/
	function newEnv(){
		global $w;
		//		
         $cuerpo = $w->setSecure($_POST['cuerpo']);
         $ip=$w->getRealIP();
         $fecha= time();

$query = mysql_query('SELECT * FROM c_chat  WHERE usuario = "'.$_SESSION['uid'].'"  ORDER BY id DESC LIMIT 1');
		if(!$query) die(mysql_error());
		$data = mysql_fetch_assoc($query);


    $texto= wordwrap($cuerpo,80,"<br>",true); 

     $corpo = $this->parseSmiles($texto);

if($cuerpo=='' || $data['cuerpo']== $corpo){
return false;
}
          
$var= $this->getRango();

if(empty($var)){

$rango=$u['rango'];

}else{

$rango=$var['rango'];

}

$result = mysql_query("INSERT INTO c_chat (usuario,cuerpo,rango,fecha,ip) VALUES ('".$_SESSION['uid']."','".$corpo."','{$rango}','{$fecha}','{$ip}')");

if($result) return 
true;
		
else return false;
		
}

/*
		getClean() BORRAMOS MENSAJES ANTIGUOS 4HS
		
	*/
	function getClean(){
		global $wuser, $w;

$fecha=time();
		//mysql_query('DELETE FROM c_chat WHERE fecha + 14400 <=  \''.$fecha.'\'');
	}
/*
		getBan() VEMOS SI ESTA BANEADO
		
	*/
	function getBan(){
		global $wuser, $w;
		//
		$query = mysql_query('SELECT * FROM c_chat_suspendidos  WHERE usuario = \''.$_SESSION['uid'].'\'  ORDER BY id ASC LIMIT 1');
		if(!$query) die(mysql_error());
		$data = mysql_fetch_assoc($query);
		
		//
		return $data;
	}

/*
		getChat() NUCLEO DEL CHAT
		
	*/
	function getChat(){
		global $w;
		//
		$query = mysql_query('SELECT c.cuerpo AS cuerpos, c.usuario, c.rango, c.fecha, c.ip, c.estado,m.*,l.* FROM c_chat AS c LEFT JOIN usuarios AS m ON c.usuario=m.usuario_id LEFT JOIN c_chat_admod AS l ON m.usuario_id=l.usuario WHERE c.estado = 0  ORDER BY c.fecha ASC');
		if(!$query) die(mysql_error());
		$data = result_array($query);
		//
		return $data;
	}

/*
		getRango() OBTENEMOS EL STAFF DEL CHAT, ADMIN O MOD
		
	*/
	function getRango(){
		global $wuser, $w;
		//
		$query = mysql_query('SELECT * FROM c_chat_admod  WHERE usuario = \''.$_SESSION['uid'].'\'  ORDER BY idad ASC LIMIT 1');
		if(!$query) die(mysql_error());
		$data = mysql_fetch_assoc($query);
		
		//
		return $data;
	}
/*
		getusBan() OBTNEMOS USERS BANEADOS
		
	*/
	function getusBan(){
		global $wuser, $w;
		//
		$query = mysql_query('SELECT c.*,m.* FROM c_chat_suspendidos AS c LEFT JOIN usuarios AS m ON c.usuario=m.usuario_id 
 ORDER BY c.id DESC');
		if(!$query) die(mysql_error());
		$data = result_array($query);
		
		//
		return $data;
	}

/*
		delMsg() BORRAMOS MENSAJE O BORRAMOS TODO DEPENDE DE LA ACCION
		
	*/
	function delMsg($metod){
		global $wuser, $w;
         
           $mensaje=(int)$_POST['mensaje'];
       
          $ran=$this->getRango();

       if($ran){

if(!$metod){

		mysql_query('DELETE FROM c_chat WHERE id = \''.$mensaje.'\'');
       
       return true;
}else{
mysql_query('DELETE FROM c_chat WHERE id >= 0');

}

}else{
return false;

}

       }
    
/*
		newDesban() BORRAMOS SUSPENSION
		
	*/
	function newDesban(){
		global $wuser, $w;
         
           $usuario=(int)$_POST['usuario'];

$ran=$this->getRango();

       if($ran){

		mysql_query('DELETE FROM c_chat_suspendidos WHERE usuario = \''.$usuario.'\'');

       return true;
       }else{

return false;
}

}

/*
		baneamos() BANEAMOS AL USUARIO DEL CHAT
		
	*/
	function baneamos(){
		global $wuser, $w;
$userid=(int)$_POST['userid'];
$hasta=(int)$_POST['hasta'];
$permanente=(int)$_POST['send_b'];
$razon=$w->setSecure($_POST['razon_desc']);
$fecha= time();
		//
          $ran=$this->getRango();

       if($ran){

			$sql = "INSERT INTO c_chat_suspendidos (usuario,admod,razon,fecha,permanente,hasta) VALUES ('{$_SESSION}','{$_SESSION}','{$razon}','{$fecha}','{$permanente}','{$hasta}')";
$result = mysql_query($sql);

if($result)
return "1: el usuario ha sido suspendido del chat.";
}else{
return "0: lo siento esto no esta permitido.TRON.";

   }

	}




/*
		newOnline() ACTUALIZAMOS LOS USUARIOS CONECTADOS POR TIEMPO
		
	*/
	function newOnline(){
		global $wuser, $w;

$fecha= time();
$ip=$w->getRealIP();
		//


          
if($_SESSION['uid']){

	$query = mysql_query('SELECT id FROM c_chat_conectados  WHERE usuario = \''.$_SESSION['uid'].'\'  ORDER BY id ASC LIMIT 1');
		if(!$query) die(mysql_error());
		$data = mysql_fetch_assoc($query);

if(empty($data)){

			$sql = "INSERT INTO c_chat_conectados (usuario,tiempo,ip) VALUES ('{$_SESSION}','{$fecha}','{$ip}')";
$result = mysql_query($sql);

if($result)
return "1:";
else
return "0:";

   }else{

mysql_query('UPDATE c_chat_conectados SET tiempo = \''.$fecha.'\' WHERE usuario = \''.$_SESSION['uid'].'\'');

if(mysql_query)
return "1:";
else
return "0:";
}	
}
}
/*
		getConectados() MOSTRAMOS LOS CONECTADOS
		
	*/
	function getConectados(){
		global $wuser, $w;
		//
$tiempo= time();
		$query = mysql_query('SELECT c.*,m.* FROM c_chat_conectados AS c LEFT JOIN usuarios AS m ON c.usuario=m.usuario_id  WHERE c.tiempo + 15 > \''.$tiempo.'\' ORDER BY c.id DESC');
		if(!$query) die(mysql_error());
		$data = result_array($query);
		
		//
		return $data;
	}
		function getConectadostotal(){
		global $wuser, $w;
		//
$tiempo= time();
		$query = mysql_query('SELECT COUNT(m.id) AS total FROM c_chat_conectados AS m WHERE m.tiempo + 15 > \''.$tiempo.'\'');
		if(!$query) die(mysql_error());
		$data = result_array($query);
		
		//
		return $data;
	}
/*
		editStaff() EDITAMOS EL STAFF
		
	*/
	function editStaff(){
		global $wuser, $w;

$usuario=$w->setSecure($_POST['usuario']);
$rango=(int)$_POST['rango'];
$color=$w->setSecure($_POST['color']);
$quitar=(int)$_POST['quitar'];
		//
	$query = mysql_query('SELECT usuario_id FROM usuarios  WHERE usuario_nombre = \''.$usuario.'\'  ORDER BY usuario_id ASC LIMIT 1');
		if(!$query) die(mysql_error());
		$data = mysql_fetch_assoc($query);  

      if($data['usuario_id'] && $quitar==0 or !$quitar){

			$sql = "INSERT INTO c_chat_admod (usuario,rango,color) VALUES ('{$data['user_id']}','{$rango}','{$color}')";
$result = mysql_query($sql);

if($result)
return true;
else
return false;
}elseif ($data['usuario_id'] && $quitar==1) {
    mysql_query('DELETE FROM c_chat_admod WHERE usuario = \''.$data['usuario_id'].'\'');
return true;
}else{
return "0:";

}

}

/**
     * @name parseSmiles($st, $path)
     * @access public
     * @description Convierte los Smiles
     */
	public function parseSmiles($st, $path = 'http://i.imgur.com/'){
		// SMILEYS
		$bbcode = array();
		$html = array();
        //
        $pre = '<img src="'.$path;
        $end = '" align="absmiddle"/>';
		// SMILES DEFAULT
        $bbcode[] ="-yaa"; $html[] = $pre."doCpk.gif".$end;
        $bbcode[] ="-asisi"; $html[] = $pre."0Zntv.gif".$end;
        $bbcode[] ="-see"; $html[] = $pre."7pwOi.gif".$end;
        $bbcode[] ="-bye"; $html[] = $pre."8b2wY.gif".$end;
        $bbcode[] ="-wah"; $html[] = $pre."DKpX4.png".$end;
        $bbcode[] ="-3fap"; $html[] = $pre."1Zr39.gif".$end;
        $bbcode[] ="-plaff"; $html[] = $pre."A9zQRSS.png".$end;
        $bbcode[] ="-jum"; $html[] = $pre."E2LDM.gif".$end;
        $bbcode[] ="-neg"; $html[] = $pre."ESkh4.gif".$end;
        $bbcode[] ="-drool"; $html[] = $pre."wLQFrqo.gif".$end;
        $bbcode[] ="-:B"; $html[] = $pre."YSEmn.png".$end;
        $bbcode[] ="o.O"; $html[] = $pre."HTs8S.gif".$end;
        $bbcode[] ="nono"; $html[] = $pre."oAXh4SA.gif".$end;
        $bbcode[] ="-uiy"; $html[] = $pre."ogjOR.gif".$end;
        $bbcode[] ="-ss"; $html[] = $pre."Z1EUj.gif".$end;
        $bbcode[] ="-jaja"; $html[] = $pre."LzbWs.gif".$end;
        // EXTRAS SMILES
        $bbcode[] = "D;"; $html[] = $pre."L7zty.png".$end;
        $bbcode[] = ".-."; $html[] = $pre."OMRwe.png".$end;
		$bbcode[] = "-gew"; $html[] = $pre."EUryb.png".$end;
        $bbcode[] = ":C"; $html[] = $pre."dgPeX.png".$end;
        $bbcode[] = "e,e"; $html[] = $pre."x3gaW.gif".$end;
        $bbcode[] = "-nose"; $html[] = $pre."gLzDw.gif".$end;
        $bbcode[] = "o-o"; $html[] = $pre."Q5ANzNy.png".$end;
        $bbcode[] = "-memato"; $html[] = $pre."EdEms.png".$end;
        $bbcode[] = "-winky"; $html[] = $pre."FtPFG.gif".$end;
        $bbcode[] = "O.o"; $html[] = $pre."32jJG.png".$end;
        $bbcode[] = "-jmmm"; $html[] = $pre."Jfen5.gif".$end;
        $bbcode[] = "-lulu"; $html[] = $pre."6X1FA.gif".$end;
        $bbcode[] =":c"; $html[] = $pre."wPC9DNv.png".$end;
        $bbcode[] = ":3"; $html[] = $pre."uLo3g.png".$end;
        $bbcode[] = "._."; $html[] = $pre."uZs0C.png".$end;
        $bbcode[] = "sisi"; $html[] = $pre."fcrcK.gif".$end;
        $bbcode[] = "-fapfap"; $html[] = $pre."ncokJ.gif".$end;
        $bbcode[] = "-2cry"; $html[] = $pre."Q7ycg.gif".$end;
        $bbcode[] = "-cafe"; $html[] = $pre."s01qi.gif".$end;
        $bbcode[] = "-2jum"; $html[] = $pre."wKDLR.png".$end;
        $bbcode[] = ":-lala"; $html[] = $pre."JIPci.gif".$end;
        $bbcode[] = "-acoso"; $html[] = $pre."kf98K.gif".$end;
        $bbcode[] = "-tuu"; $html[] = $pre."YOvNl.gif".$end;
        $bbcode[] = "-wdf"; $html[] = $pre."w6VW4.png".$end;
        $bbcode[] = "-concierto"; $html[] = $pre."KrqL8.gif".$end;
        $bbcode[] = "-2si"; $html[] = $pre."uBvJv3Y.gif".$end;
        $bbcode[] = "-csi"; $html[] = $pre."WWvnx.gif".$end;
        // OBJECTOS
        $bbcode[] = "-E"; $html[] = $pre."mBM2z.gif".$end;
        $bbcode[] = "r,r"; $html[] = $pre."t2BLh.gif".$end;
        $bbcode[] = ":alaba:"; $html[] = $pre."pYLN3.gif".$end;
        $bbcode[] = ":headbang:"; $html[] = $pre."VyOKX.gif".$end;
		
		
        $bbcode[] = ":nofa:"; $html[] = $pre."kjPcN.gif".$end;
        $bbcode[] = "-yao"; $html[] = $pre."il9seW.gif".$end;
        $bbcode[] = "-iuu"; $html[] = $pre."rZE7v.gif".$end;
        $bbcode[] = "-mentira"; $html[] = $pre."ijvrTi.gif".$end;
        $bbcode[] = "-duda"; $html[] = $pre."itDqb.png".$end;
        $bbcode[] = "-eyes"; $html[] = $pre."iqk8y.gif".$end;
        $bbcode[] = "-lol"; $html[] = $pre."cZDvF.jpg".$end;
        $bbcode[] = "fuuuuu"; $html[] = $pre."mS6Vtsv.png".$end;
        $bbcode[] = "foreveralone"; $html[] = $pre."ch1aj.gif".$end;
        $bbcode[] = "-mirada"; $html[] = $pre."9qkuW.jpg".$end;
        $bbcode[] = ":WTF:"; $html[] = $pre."bfn3v.png".$end;
        $bbcode[] = "-okay"; $html[] = $pre."PvFB5.png".$end;
        $bbcode[] = "-buaa"; $html[] = $pre."kLsOf.png".$end;
        $bbcode[] = "vellenger"; $html[] = $pre."uoRgZxH.gif".$end;
		
        $bbcode[] = "-qh"; $html[] = $pre."9Qhez.gif".$end;
        $bbcode[] = "-teodio"; $html[] = $pre."PUjuk.png".$end;
        $bbcode[] = ":troll:"; $html[] = $pre."cdash.gif".$end;
        $bbcode[] = "weeeee"; $html[] = $pre."eJcfq.png".$end;
        $bbcode[] = "-fupens"; $html[] = $pre."udSlc.png".$end;
        $bbcode[] = "-moquea"; $html[] = $pre."7P5no.gif".$end;
        $bbcode[] = "pokerface"; $html[] = $pre."xJiPCAM.jpg".$end;
        $bbcode[] = ":pqn:"; $html[] = $pre."TtHcjpR.jpg".$end;
        $bbcode[] = "-siclaro"; $html[] = $pre."TPSa7.jpg".$end;
        $bbcode[] = "-infinitodesprecio"; $html[] = $pre."7AXhw.jpg".$end;
        $bbcode[] = "-grin"; $html[] = $pre."OzqIk.png".$end;
        $bbcode[] = "-malote"; $html[] = $pre."P1pBwBq.jpg".$end;
        $bbcode[] = "-dale"; $html[] = $pre."Z6ueaih.gif".$end;
        $bbcode[] = "-oknose"; $html[] = $pre."BIDsWMD.gif".$end;
        $bbcode[] = "-nosi"; $html[] = $pre."7CL3q.gif".$end;
        $bbcode[] = "-foca"; $html[] = $pre."IyItl.jpg".$end;
        $bbcode[] = "-cyao"; $html[] = $pre."XM1mD.jpg".$end;
        $bbcode[] = "-hola"; $html[] = $pre."c33Nb.gif".$end;
        $bbcode[] = "-fpalm"; $html[] = $pre."W816p.gif".$end;
        $bbcode[] = "-dtroll"; $html[] = $pre."2OjUJ.png".$end;
        $bbcode[] = "-ohfuck"; $html[] = $pre."x4biV3x.png".$end;
        $bbcode[] = "-metale"; $html[] = $pre."gXwrwvj.gif".$end;
        $bbcode[] = "-gola"; $html[] = $pre."pmeUe.gif".$end;
        $bbcode[] = "XD"; $html[] = $pre."vctNP.gif".$end;
        $bbcode[] = "-att"; $html[] = $pre."zPsko.png".$end;
        $bbcode[] = "-okno"; $html[] = $pre."Iu733.gif".$end;
        $bbcode[] = "-qtpc"; $html[] = $pre."0suk5.gif".$end;
        $bbcode[] = "-mori"; $html[] = $pre."i5BFl.gif".$end;
        $bbcode[] = "2okno"; $html[] = $pre."ruQX8.png".$end;
        $bbcode[] = "-onda"; $html[] = $pre."1GnQM.gif".$end;
        $bbcode[] = "-haha"; $html[] = $pre."ffJ4p.png".$end;
        $bbcode[] = "-sape"; $html[] = $pre."CGMiD.gif".$end;
        $bbcode[] = "-midfing"; $html[] = $pre."VnEy9.jpg".$end;
        $bbcode[] ="-cruise"; $html[] = $pre."A8VdWwk.gif".$end;
        $bbcode[] = ":BAN"; $html[] = $pre."bCI9b.gif".$end;
        $bbcode[] = "-tdance"; $html[] = $pre."rn2gR.gif".$end;
		$bbcode[] = "-suspicius"; $html[] = $pre."Uihs9.gif".$end;
		
		$bbcode[] = "-fyeah"; $html[] = $pre."NCPBI.gif".$end;
        $bbcode[] = "-uoh"; $html[] = $pre."geSwQ.gif".$end;
        $bbcode[] = "eeeer34"; $html[] = $pre."rMS66.gif".$end;
        $bbcode[] = ":R"; $html[] = $pre."Lq1yW.gif".$end;
        $bbcode[] = "-fola"; $html[] = $pre."jMHsJ5S.gif".$end;
        $bbcode[] = "-chau"; $html[] = $pre."7xhhNfl.gif".$end;
        $bbcode[] ="-exito"; $html[] = $pre."VVZ8p.jpg".$end;
        $bbcode[] = "phpost"; $html[] = $pre."j2OGo.png".$end;
        $bbcode[] = "-std"; $html[] = $pre."tmT7W.jpg".$end;
		
		$bbcode[] = "-SI"; $html[] = $pre."SSyri.jpg".$end;
        $bbcode[] = "-nmd"; $html[] = $pre."G5HAp.png".$end;
        $bbcode[] = ".---."; $html[] = $pre."mewZK.gif".$end;
        $bbcode[] = "-sparta"; $html[] = $pre."PN7jW.jpg".$end;
        $bbcode[] = "-FEW"; $html[] = $pre."dZpC0.gif".$end;
        $bbcode[] = "-piensa"; $html[] = $pre."LfPlO.gif".$end;
		
		$bbcode[] = "-aliens"; $html[] = $pre."Vaozk.jpg".$end;
        $bbcode[] = "-herp"; $html[] = $pre."JJ4do.gif".$end;
        $bbcode[] = "fapfap"; $html[] = $pre."tOFEs3t.jpg".$end;
        $bbcode[] = "-2newsguy"; $html[] = $pre."uwVpH.png".$end;
        $bbcode[] = "-lohago"; $html[] = $pre."0L5Wn.png".$end;
		
		$bbcode[] = "-B"; $html[] = $pre."QJhj5.gif".$end;
        $bbcode[] = "-2sape"; $html[] = $pre."MajWD.gif".$end;
        $bbcode[] = "-hlm"; $html[] = $pre."JIntE.gif".$end;
        $bbcode[] = "-zzz"; $html[] = $pre."Jveea.gif".$end;
        $bbcode[] = "-fbaila"; $html[] = $pre."vqif6.gif".$end;
        $bbcode[] = "-puf"; $html[] = $pre."V8Kfg.gif".$end;
        $bbcode[] ="-comiendo"; $html[] = $pre."izqce.gif".$end;
        $bbcode[] = "-arh"; $html[] = $pre."hB7eS.gif".$end;
        $bbcode[] = "-wonka"; $html[] = $pre."XxrEz.gif".$end;
		
		$bbcode[] = "-fumo"; $html[] = $pre."utVFo.jpg".$end;
        $bbcode[] = "-alan"; $html[] = $pre."BuyiZDX.jpg".$end;
        $bbcode[] = "-genius"; $html[] = $pre."KbRg5W5.gif".$end;
        $bbcode[] = "-nmj"; $html[] = $pre."YhP4y.jpg".$end;
        $bbcode[] = "-jojojo"; $html[] = $pre."Vkx6D.gif".$end;
        $bbcode[] = "2oksi"; $html[] = $pre."MYOoE.gif".$end;
		
		$bbcode[] = "-ohno"; $html[] = $pre."oy1fx.gif".$end;
        $bbcode[] = "-sir"; $html[] = $pre."nLaTa.jpg".$end;
        $bbcode[] = "woo"; $html[] = $pre."ULNCZ.gif".$end;
		$bbcode[] = "wortit"; $html[] = $pre."0xbDF2m.png".$end;
		$bbcode[] = "Wortit"; $html[] = $pre."0xbDF2m.png".$end;
		$bbcode[] = "WORTIT"; $html[] = $pre."0xbDF2m.png".$end;
        
		//COSTO UN HUEVO AGREGAR LOS EMOTICONES XD.

		// REEMPLAZAMOS SMILEYS
		return str_replace($bbcode, $html, $st);
	}


}

?>
