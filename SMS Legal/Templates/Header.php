<?php
date_default_timezone_set("America/Sao_Paulo");
// OTIMIZAÇÃO DO HTML E BUFFER DO PHP
ob_start("ob_gzhandler");

/* ### GRAVANDO LOG DE ERRO  ###
 *
 * Além de enviar o erro causado no script para o
 * desenvolvedor o sistema
 * grava um log de erros na pasta
 * INCLUDES/TRATAMENTO_ERROS/ para uma revisão
 * dos mesmos, assim facilitando a manutenção do script
 *
 */

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/Logs de Erro do Sistema .txt');
error_reporting(E_ALL);
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>SMSLegal - Publicidade com Retorno Garantido</title>

		<meta charset="utf-8"/>

		<!---FAVICONS--->

		<link rel='shortcut icon' href='imagens/favicon.ico'/>

		<!--Bloco da tela inicial do Windows 8--->

		<!--Um bloco da tela inicial aproxima o logotipo do seu site aos usuários permitindo “fixá-lo” e iniciar esta página bem ao lado dos
		aplicativos da Windows Store. Para mais Informações acesse http://www.buildmypinnedsite.com/
		-->

		<meta name="application-name" content="SMSLegal - Publicidade com Retorno Garantido | http://www.smslegal.com.br"/>

		<meta name="msapplication-TileColor" content="#f1f1f1"/>

		<meta name="msapplication-square70x70logo" content="imagens/tiny.png"/>

		<meta name="msapplication-square150x150logo" content="imagens/square.png"/>

		<meta name="msapplication-wide310x150logo" content="imagens/wide.png"/>

		<meta name="msapplication-square310x310logo" content="imagens/large.png"/>

		<meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=http://feeds.feedburner.com/BlogCharleCorra?format=xml&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=http://feeds.feedburner.com/BlogCharleCorra?format=xml&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=http://feeds.feedburner.com/BlogCharleCorra?format=xml&amp;id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=http://feeds.feedburner.com/BlogCharleCorra?format=xml&amp;id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=http://feeds.feedburner.com/BlogCharleCorra?format=xml&amp;id=5; cycle=1"/>

		<!---Bloco da tela inicial do Windows 8--->

		<!---FAVICONS--->

		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

		<link type="text/css" rel="stylesheet" href="CSS/Layout/Estrutura.css">

		<link type="text/css" rel="stylesheet" href="CSS/Layout/Personalizacoes.css">

		<link type="text/css" rel="stylesheet" href="CSS/Jquery/jquery-ui-1.10.3.custom.min.css">
		
		<link type="text/css" rel="stylesheet" href="CSS/ColorBox/colorbox.css">
		
		<!--JQUERY-->
		<script src="JS/Jquery/jquery-1.9.1.js"></script>
		
		<script src="JS/Jquery/jquery-ui.custom.min.js"></script>
		
		<script src="JS/jquery.ui.core.js"></script>
		
		<script src="JS/jquery.ui.widget.js"></script>
		
		<script src="JS/jquery.ui.accordion.js"></script>
		
		<script src="JS/jquery.ui.tabs.js"></script>
		
		<script src="JS/jquery.ui.position.js"></script>
		
		<script src="JS/ui/jquery.ui.tooltip.js"></script>
		
		<script src="JS/ui/jquery.ui.button.js"></script>
		
		<script src="JS/ColorBox/jquery.colorbox-min.js"></script>
		

		<!--AVISO DE ATUALIZAÇÃO DO NAVEGADOR-->
		<script type="text/javascript" src="JS/VerificaNavegador.js"></script>
		<!--AVISO DE ATUALIZAÇÃO DO NAVEGADOR-->

		<!--EASY SLIDER-->

		<script type="text/javascript" src="JS/EasySlider/easySlider1.7.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#slider").easySlider({
					auto : true,
					continuous : true,
					nextId : "slider1next",
					prevId : "slider1prev"
				});
			});
		</script>

		<script src="JS/ScriptsSMSLegal.js"></script>

	</head>
	<?php
    ///// OTIMIZA O CARREGAMENTO DO SCRIPT
    ///// O MESMO DEVE SER ADICIONADO ENTRE O FINAL DO HEAD E
    // O INICIO DO BODY DO HTML
    flush();
    ///// OTIMIZA O CARREGAMENTO DO SCRIPT
	?>

	<body>
		<!--REDIRECIONA CASO O USUÁRIO ESTEJA COM JAVASCRIPTn DESATIVADO-->
		<noscript>
			<meta http-equiv="Refresh" content="1;  url=javascript.php"/>
		</noscript>
		<!--REDIRECIONA CASO O USUÁRIO ESTEJA COM JAVASCRIPTn DESATIVADO-->
