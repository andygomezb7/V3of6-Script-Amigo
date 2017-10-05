<?php if (!defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para pedir servicio
 *
 * @name    bwort.class.php
 * @author  Wortit developers
 */
class tsBwort{
    // INSTANCIA DE LA CLASE
    public static function &getInstance()
    {
        static $instance;

        if (is_null($instance))
        {
            $instance = new tsBwort();
        }
        return $instance;
    }

    function getBodyimg($texto) {
$foto = '';
ob_start();
ob_end_clean();
preg_match_all("/<img[\s]+[^>]*?src[\s]?=[\s\"\']+(.*\.([gif|jpg|png|jpeg]{3,4}))[\"\']+.*?>/", $texto, $array);
$foto = $array [1][0];
if(empty($foto)){
$foto = $this->settings['direccion_url'].'/images/avatar/group.png';
}
return $foto;
}

    /*
    *   FUNCION MENCIONES
    *   
    *   @access public
    *   @author Wortit Developers
    *   
    *   MUESTRA COMO LINK LAS MENCIONES INCIADAS CON @
    */
    
        public function setMenciones($html){
        # GLOBALES
        global $wuser;
        # HACK
        $html = $html.' ';
        # BUSCAMOS A USUARIOS
        preg_match_all('/\B@([a-zA-Z0-9_-]{4,16}+)\b/',$html, $users);
        $menciones = $users[1];
        # VEMOS CUALES EXISTEN
        foreach($menciones as $key => $user){
            if(strtolower($user) != strtolower($_SESSION['usuario_nombre'])) {
                $uid = $wuser->loadUserID($user);
                if(!empty($uid)) {
                    $find = '@'.$user.' ';
                    $replace = '<a href="'.$this->settings['direccion_url'].'/'.$user.'" class="wortip" uid="'.$uid.'" target="_blank">@'.$user.'</a> ';
                    $html = str_replace($find, $replace, $html);
                }
            }
        }
        # RETORNAMOS
        return $html;
    }
    
    /*
    DETECTAR URL EN UNA CADENA
    */

function toLink($text){
$reg_exUrls1 = "/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
$reg_exUrls = "/(http|https|ftp|ftps)\:\/\/(www).\[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
$sfawefwe = "/(www)\.[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
if(preg_match($reg_exUrls1, $text, $url)){ $ksl = preg_replace($reg_exUrl1, "<a href='http://".$url[0]."' target='_blank'>".$url[0]."</a> ", $text); }else{ $ksl = $text; }
if(preg_match($reg_exUrls, $text, $url)){ $ksl = preg_replace($reg_exUrls, "<a href=".$url[0]." target='_blank'>".$url[0]."</a> ", $text); }else{ $ksl = $text; }
if(preg_match($reg_exUrl, $text, $url)){ $ksl = preg_replace($reg_exUrl, "<a href=".$url[0]." target='_blank'>".$url[0]."</a> ", $text); }else{ $ksl = $text; }
if(preg_match($sfawefwe, $text, $url)){ $ksl = preg_replace($sfawefwe, "<a href='http://".$url[0]."' target='_blank'>".$url[0]."</a> ", $text);  }else{ $ksl = $text; }
return $ksl;
}

    /**
    * SET HASHTAG
    **/
    
    function setHashtag($text){
    preg_match_all('/#([A-Za-z0-9_-ñÑçÇáÁäÄàÀâÂéÉëËèÈêÊíÍïÏìÌîÎóÓöÖòÒôÔúÚüÜùÙûÛ]+)/',$text, $hash); 
    $hashtag = $hash[1]; 
    foreach($hashtag  as $key => $hash){ 
        $find = '#'.$hash; 
        $replace = "<a target='_blank' href='".$this->settings['direccion_url']."/search/?q=%23".$hash."&t=bworts'>#".$hash."</a> "; 
        $text = str_replace($find, $replace, $text); 
    } 
    return $text;
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
        //$text = str_replace(' ', '<span style="margin-left:40px"></span>', $text);
        return $text;
    }

}
?>