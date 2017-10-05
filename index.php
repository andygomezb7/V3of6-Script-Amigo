<?php
/*
*--------------------------------------------------------------------
*  WORTIT - POWERED BY ANDY GÓMEZ (www.facebook.com/andesau)
*--------------------------------------------------------------------
*/
/* MOSTRAMOS EL HEADER */
include 'header.php';
/* MOSTRAMOS LA PAGINA DE INICIA */
if(!empty($_GET['do']) && $_GET['do'] == 'home'){ include('php/pages/home.php'); }
?>