<?php
if(!defined('UNTARGETED')) die('Lo que buscas no se encuentra por aqu&acute;');
class bbcodee{
	function start($text, $smiles = true, $code_in = false, $title, $destruyed = false){
		global $mysqli;
		$text = $this->anti_xss($text);
		$text = htmlentities($text, ENT_NOQUOTES);
		$text = nl2br($text);		
		$explorar = explode('[code]', $text);
		if(count($explorar) > 1) $explorar_2 = explode('[/code]', $explorar[1]);
		
		/*if(count($explorar_2) > 1 && !$code_in){
			// IMPORTANTE: ESTA FUNCION NO ANDA AL 100%
			$text .= $this->codes($explorar[0]);
			$text .= '<pre class="text_code">'.$this->special_codes($explorar_2[0]).'</pre>';
			$text .= $this->codes($explorar_2[1]);
		}else{*/
			if($destruyed == false){
			$text = $this->codes($text, $title);
			//$text = $this->censuras($text);
			if($smiles) $text = $this->smiles($text);
			return $this->special_codes($text);
			}else{
			$text = $this->descodes($text, $title);
			return $text;
			}
		//}
	}
	
	function codes($text, $title){
		global $user;
		$a = array( 
			"/(?i)\[\/(b|i|u)\]\[(b|i|u)\]/i",
			"/(?i)\[i\](.*?)\[\/i\]/i",
			"/(?i)\[b\](.*?)\[\/b\]/i",
			"/(?i)\[u\](.*?)\[\/u\]/i",
			"/(?i)\[hr\]/i",
			"/(?i)\[swf\=(.+?)\]/i",
			"/(?i)\[video\](.*?)=(.*?)\[\/video\]/i",
			"/(?i)\[align\=([a-z]+)\]([^\a]+?)\[\/align\]/i",
			"/(?i)\[size\=([0-9]{1,2})\]([^\a]+?)\[\/size\]/i",
			"/(?i)\[font\=([^\a]+?)\]([^\a]+?)\[\/font\]/i",
			"/(?i)\[color\=([\#]?[0-9a-f]{3}|[\#]?[0-9a-f]{6}|[a-z]{3,})\]([^\a]+?)\[\/color\]/i",
			"/(?i)\[quote\=([^\n\r\t\<\>]+?)\|([0-9]+?)\]([^\a]+?)\[\/quote\]/i",
			//"/(?i)\[img\](http|https|ftp|irc|ed2k|gopher|telnet)?(\:\/\/)?([^\<\>[:space:]]+)\[\/img\]/i",
			"/(?i)\[img\](.*?)\[\/img\]/i",
			"/(?i)\[img\=(.*?)\]/i", 
			"/(?i)(\[url\])(http|https|ftp|irc|ed2k|gopher|telnet)(\:\/\/)([^\<\>[:space:]]+?)(\[\/url\])/i",
			"/(?i)\[url\=(http|https|ftp|irc|ed2k|gopher|telnet|gopher|telnet)(\:\/\/)([^\<\>[:space:]]+?)\](.+?)(\[\/url\])/i",
			"/\[spoiler\](.*?)\[\/spoiler\]/i",
			"/\[code\](.*?)\[\/code\]/is",
			"/\[ol\](.*?)\[\/ol\]/is",
			"/\[ul\](.*?)\[\/ul\]/is",
			"/\[sub\](.*?)\[\/sub\]/is",
			"/\[li\](.*?)\[\/li\]/is",
			"/\[sup\](.*?)\[\/sup\]/is",
			"/\[td\](.*?)\[\/td\]/is",
			"/\[tr\](.*?)\[\/tr\]/is",
			"/\[table\](.*?)\[\/table\]/is",
			"/\[notice\](.*?)\[\/notice\]/is",
			"/\[info\](.*?)\[\/info\]/is",
			"/\[warning\](.*?)\[\/warning\]/is",
			"/\[error\](.*?)\[\/error\]/is",
			"/\[success\](.*?)\[\/success\]/is",
			"/\[quote\](.*?)\[\/quote\]/is",
			"/\[meg\](.*?)\[\/meg\]/is",
			"/\[enlace\](.*?)\[\/enlace\]/is",
			"/\[med\](.*?)\[\/med\]/is",
			"/\[put\](.*?)\[\/put\]/is",

	   ); 

	   $b = array(
			"",
			"<i>\\1</i>",
			"<b>\\1</b>",
			"<u>\\1</u>",
			"<hr />",
			"<embed width=\"640\" height=\"390\" wmode=\"transparent\" autoplay=\"false\" allownetworking=\"internal\" allowfullscreen=\"true\" type=\"application/x-shockwave-flash\" quality=\"high\" src=\"\\1\"><br/>",
			"<embed width=\"640\" height=\"390\" wmode=\"transparent\" autoplay=\"false\" allownetworking=\"internal\" allowfullscreen=\"true\" type=\"application/x-shockwave-flash\" quality=\"high\" src=\"http://www.youtube.com/v/\\2\"><br />",
			"<div align=\"\\1\">\\2</div>",
			"<span style=\"font-size:\\1pt;line-height:\\1pt;\">\\2</span>",
			"<font face=\"\\1\">\\2</font>",
			"<span style=\"color: \\1;\">\\2</span>",
			"<blockquote><div class=\"cita\"><strong>\\1</strong> dijo:</div><div class=\"citacuerpo\"><p>\\3</p></div></blockquote>",
			"<img src=\"\\1\\2\\3\"".($title ? " alt=\"".$title."\"" : "")."/>",
			"<img src=\"\\1\\2\\3\" />",
			"<a href=\"\\2\\3\\4\" target=\"_blank\">\\2\\3\\4</a>",
			"<a href=\"\\1\\2\\3\" target=\"_blank\">\\4</a>",
			"<div class=\"spoiler\"><div class=\"title\"><a href=\"#\" onclick=\"spoiler($(this)); return false;\">Spoiler:</a></div><div class=\"body\">\\1</div></div>",
			"<pre class=\"text_code\">\\1</pre>",
			"<ol>\\1</ol>",
			"<ul>\\1</ul>",
			"<sub>\\1</sub>",
			"<li>\\1</li>",
			"<sup>\\1</sup>",
			"<td>\\1</td>",
			"<tr>\\1<tr>",
			"<table>\\1</table>",
			"<div class=\"pnotice avisos\"><span>\\1</span></div>",
			"<div class=\"pinfo avisos\"><span>\\1</span></div>",
			"<div class=\"pwarning avisos\"><span>\\1</span></div>",
			"<div class=\"perror avisos\"><span>\\1</span></div>",
			"<div class=\"psuccess avisos\"><span>\\1</span></div>",
			"<blockquote class=\"cita\"><div class=\"citacuerpo\"><p>\\1</p></div></blockquote>",
		    "<center><div class=\"enlace\"><input id=\"contadormega\" class=\"enlavel\" onclick=\"mega()\" type=\"button\" value=\"Mostrar Link del Enlace\" /><br/><div id=\"hidemega\" style=\"display: none;\" class=\"hide-v\"></div></div></center>",
		    "<center><div class=\"enlace\"><input id=\"contadormega\" class=\"enlavel\" onclick=\"mega()\" type=\"button\" value=\"Mostrar Link del Enlace\" /><br/><div id=\"hidemega\" style=\"display: none;\" class=\"hide-v\"></div></div></center>",
		    "<center><div class=\"enlace\"><input id=\"contadormega\" class=\"enlavel\" onclick=\"mega()\" type=\"button\" value=\"Mostrar Link del Enlace\" /><br/><div id=\"hidemega\" style=\"display: none;\" class=\"hide-v\"></div></div></center>",
		    "<center><div class=\"enlace\"><input id=\"contadormega\" class=\"enlavel\" onclick=\"mega()\" type=\"button\" value=\"Mostrar Link del Enlace\" /><br/><div id=\"hidemega\" style=\"display: none;\" class=\"hide-v\"></div></div></center>",
		);
		foreach($a AS $key => $val){
			while(preg_match($val, $text)){
				$text = preg_replace($val, $b[$key], $text);
			}
		}
		$tu = empty($user->nick) ? 'visitante' : $user->nick;
		$text = str_replace('[tu]', $tu, $text);
		return html_entity_decode($text, ENT_NOQUOTES);
	}
	
    function descodes($text, $title){
		global $wuser;
		$a = array( 
			"/(?i)\[\/(b|i|u)\]\[(b|i|u)\]/i",
			"/(?i)\[i\](.*?)\[\/i\]/i",
			"/(?i)\[b\](.*?)\[\/b\]/i",
			"/(?i)\[u\](.*?)\[\/u\]/i",
			"/(?i)\[hr\]/i",
			"/(?i)\[swf\=(.+?)\]/i",
			"/(?i)\[video\](.*?)=(.*?)\[\/video\]/i",
			"/(?i)\[align\=([a-z]+)\]([^\a]+?)\[\/align\]/i",
			"/(?i)\[size\=([0-9]{1,2})\]([^\a]+?)\[\/size\]/i",
			"/(?i)\[font\=([^\a]+?)\]([^\a]+?)\[\/font\]/i",
			"/(?i)\[color\=([\#]?[0-9a-f]{3}|[\#]?[0-9a-f]{6}|[a-z]{3,})\]([^\a]+?)\[\/color\]/i",
			"/(?i)\[quote\=([^\n\r\t\<\>]+?)\|([0-9]+?)\]([^\a]+?)\[\/quote\]/i",
			//"/(?i)\[img\](http|https|ftp|irc|ed2k|gopher|telnet)?(\:\/\/)?([^\<\>[:space:]]+)\[\/img\]/i",
			"/(?i)\[img\](.*?)\[\/img\]/i",
			"/(?i)\[img\=(.*?)\]/i", 
			"/(?i)(\[url\])(http|https|ftp|irc|ed2k|gopher|telnet)(\:\/\/)([^\<\>[:space:]]+?)(\[\/url\])/i",
			"/(?i)\[url\=(http|https|ftp|irc|ed2k|gopher|telnet|gopher|telnet)(\:\/\/)([^\<\>[:space:]]+?)\](.+?)(\[\/url\])/i",
			"/\[spoiler\](.*?)\[\/spoiler\]/i",
			"/\[code\](.*?)\[\/code\]/is",
			"/\[ol\](.*?)\[\/ol\]/is",
			"/\[ul\](.*?)\[\/ul\]/is",
			"/\[sub\](.*?)\[\/sub\]/is",
			"/\[li\](.*?)\[\/li\]/is",
			"/\[sup\](.*?)\[\/sup\]/is",
			"/\[td\](.*?)\[\/td\]/is",
			"/\[tr\](.*?)\[\/tr\]/is",
			"/\[table\](.*?)\[\/table\]/is",
			"/\[notice\](.*?)\[\/notice\]/is",
			"/\[info\](.*?)\[\/info\]/is",
			"/\[warning\](.*?)\[\/warning\]/is",
			"/\[error\](.*?)\[\/error\]/is",
			"/\[success\](.*?)\[\/success\]/is",
			"/\[quote\](.*?)\[\/quote\]/is",
			"/\[meg\](.*?)\[\/meg\]/is",
			"/\[enlace\](.*?)\[\/enlace\]/is",
			"/\[med\](.*?)\[\/med\]/is",
			"/\[put\](.*?)\[\/put\]/is",

	   ); 

	   $b = array(
			"",
			"<i>\\1</i>",
			"<b>\\1</b>",
			"<u>\\1</u>",
			"<hr />",
			"<embed width=\"640\" height=\"390\" wmode=\"transparent\" autoplay=\"false\" allownetworking=\"internal\" allowfullscreen=\"true\" type=\"application/x-shockwave-flash\" quality=\"high\" src=\"\\1\"><br/>",
			"<embed width=\"640\" height=\"390\" wmode=\"transparent\" autoplay=\"false\" allownetworking=\"internal\" allowfullscreen=\"true\" type=\"application/x-shockwave-flash\" quality=\"high\" src=\"http://www.youtube.com/v/\\2\"><br />",
			"<div align=\"\\1\">\\2</div>",
			"<span style=\"font-size:\\1pt;line-height:\\1pt;\">\\2</span>",
			"<font face=\"\\1\">\\2</font>",
			"<span style=\"color: \\1;\">\\2</span>",
			"<blockquote><div class=\"cita\"><strong>\\1</strong> dijo:</div><div class=\"citacuerpo\"><p>\\3</p></div></blockquote>",
			"<img src=\"\\1\\2\\3\"".($title ? " alt=\"".$title."\"" : "")."/>",
			"<img src=\"\\1\\2\\3\" />",
			"<a href=\"\\2\\3\\4\" target=\"_blank\">\\2\\3\\4</a>",
			"<a href=\"\\1\\2\\3\" target=\"_blank\">\\4</a>",
			"<div class=\"spoiler\"><div class=\"title\"><a href=\"#\" onclick=\"spoiler($(this)); return false;\">Spoiler:</a></div><div class=\"body\">\\1</div></div>",
			"<pre class=\"text_code\">\\1</pre>",
			"<ol>\\1</ol>",
			"<ul>\\1</ul>",
			"<sub>\\1</sub>",
			"<li>\\1</li>",
			"<sup>\\1</sup>",
			"<td>\\1</td>",
			"<tr>\\1<tr>",
			"<table>\\1</table>",
			"<div class=\"pnotice\"><span>\\1</span></div>",
			"<div class=\"pinfo\"><span>\\1</span></div>",
			"<div class=\"pwarning\"><span>\\1</span></div>",
			"<div class=\"perror\"><span>\\1</span></div>",
			"<div class=\"psuccess\"><span>\\1</span></div>",
			"<blockquote><div class=\"cita\"><strong>Cita:</strong></div><div class=\"citacuerpo\"><p>\\1</p></div></blockquote>",
		    "<center><div class=\"enlace\"><input id=\"contadormega\" class=\"enlavel\" onclick=\"mega()\" type=\"button\" value=\"Mostrar Link del Enlace\" /><br/><div id=\"hidemega\" style=\"display: none;\" class=\"hide-v\"></div></div></center>",
		    "<center><div class=\"enlace\"><input id=\"contadormega\" class=\"enlavel\" onclick=\"mega()\" type=\"button\" value=\"Mostrar Link del Enlace\" /><br/><div id=\"hidemega\" style=\"display: none;\" class=\"hide-v\"></div></div></center>",
		    "<center><div class=\"enlace\"><input id=\"contadormega\" class=\"enlavel\" onclick=\"mega()\" type=\"button\" value=\"Mostrar Link del Enlace\" /><br/><div id=\"hidemega\" style=\"display: none;\" class=\"hide-v\"></div></div></center>",
		    "<center><div class=\"enlace\"><input id=\"contadormega\" class=\"enlavel\" onclick=\"mega()\" type=\"button\" value=\"Mostrar Link del Enlace\" /><br/><div id=\"hidemega\" style=\"display: none;\" class=\"hide-v\"></div></div></center>",
		);
		foreach($a AS $key => $val){
			while(preg_match($val, $text)){
				$text = preg_replace($val, '', $text);
			}
		}
		$tu = empty($_SESSION['uid']) ? 'visitante' : $wuser->nick;
		$text = str_replace('[tu]', $tu, $text);
		return html_entity_decode($text, ENT_NOQUOTES);
	}

	function anti_xss($text){
		$a = array( 
			'@< [/!]*?[^<>]*?>@si',
			'@< ![sS]*?--[ tnr]*>@',
			'/(?i)\<script\>(.*?)\<\/script\>/i',
			'/(?i)\<script (.*?)\>(.*?)\<\/script>/i',
			'/(?i)\<style\>(.*?)\<\/style\>/i',
			'/(?i)\<style (.*?)\>(.*?)\<\/style>/i'
	   ); 

	   $b = array( 
			'',
			'',
			html_entity_decode('<script>\\1</script>'),
			html_entity_decode('<script \\1>\\2</script>'),
			html_entity_decode('<style>\\1</style>'),
			html_entity_decode('<style \\1>\\2</style>')
		);

         foreach($a AS $key => $val){
			while(preg_match($val, $text)){
				$text = preg_replace($val, '', $text);
			}
		}
		//$text = preg_replace($a, $b, $text);
		return $text;
	}
	
	function special_codes($text){
		$text = str_replace('\\\n', '<br />', $text);
		$text = str_replace('\\n', '<br />', $text);
		$text = str_replace('\n', '<br />', $text);
		$text = str_replace('\r', '', $text);
		//$text = str_replace('\"', '"', $text);
		//$text = str_replace("\'", "'", $text);
		$lss = substr('\/', 0, 1);
		$text = str_ireplace($lss.$lss, $lss, $text);
		//$text = str_replace('	', '<span style="margin-left:40px"></span>', $text);
		return $text;
	}
	
	//function censuras($text){
	//	global $mysqli;
	//	$query = $mysqli->query('SELECT c.* FROM censored AS c');
	//	while($row = $query->fetch_assoc()){
	//		if($row['c_ireplace']) $text = str_ireplace($row['c_val'], $row['c_por'], $text);
	//		else $text = str_replace($row['c_val'], $row['c_por'], $text);
	//	}
	//	return $text;
	//}
	
	function smiles($text){
		global $w;
		$bbcode = array();
		$html = array();
		$patht = $w->settings['url'].'/images/static/media/icmem/';
        $pre = '<img style="max-width: 46px;max-height: 46px;" src="'.$patht;
        $end = '" align="absmiddle" ';
        $query = mysql_query("SELECT * FROM emoticones WHERE e_meme='0'");
		while($reg=mysql_fetch_array($query)){
        $bbcode[] = $reg['e_prefijo']; $html[] = $pre.$reg['e_imagen'].$end.' title="'.$reg['e_nombre'].'"/>';
        $bbcode[] = $reg['e_prefijo2']; $html[] = $pre.$reg['e_imagen'].$end.' title="'.$reg['e_nombre'].'"/>';
        }
		return str_replace($bbcode, $html, $text);
	}
}
?>