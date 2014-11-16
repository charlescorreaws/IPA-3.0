<div id="CabecalhoSite">
	<!--LOGO-->
	<div id="LogoSite">
		<a href="Home"> <img src="Imagens/logoSMSLegal.png" alt="SMS Legal - Publicidade com Retorno Garantido!" title="SMS Legal - Publicidade com Retorno Garantido!" /></a>
	</div>
	<!--LOGO-->

	<!--ACESSOS SMS LEGAL-->
	<div id="AcessoPortalSMS">
		<a class='PortaldoSMS' href="#PortaldoSMS"> <img src="Imagens/AcessoPortalSMS.png" alt="Acessar Portal do SMS" title="Acessar Portal do SMS" class="hoverImg" /></a>
		<a class='Cadastro' href="#Cadastro"> <img src="Imagens/Cadastre-se.png" alt="Cadastre-se" title="Cadastre-se" class="hoverImg" /></a>
	</div>
	<!--ACESSOS SMS LEGAL-->

	<!--REDES SOCIAIS-->
	<div id="RedesSociais">
		<a href="#"> <img src="Imagens/Social/Facebook.jpg" alt="Facebook SMSLegal" title="Facebook SMSLegal" class="hoverSocial" /></a>
		<a href="#"> <img src="Imagens/Social/Twitter.jpg" alt="Twitter SMSLegal" title="Twitter SMSLegal" class="hoverSocial" /></a>
		<a href="#"> <img src="Imagens/Social/GooglePlus.jpg" alt="Google Plus SMSLegal" title="Google Plus SMSLegal" class="hoverSocial" /></a>
		<a href="#"> <img src="Imagens/Social/Youtube.jpg" alt="Youtube SMSLegal" title="Youtube SMSLegal" class="hoverSocial" /></a>
	</div>
	<!--REDES SOCIAIS-->
</div>

<!-- PORTAL DO SMS -->
<div style='display:none'>
	<div id='PortaldoSMS' style='padding:10px; background:#fff;'>
		<form action="http://charlescorrea.portaldosms.com/index.php" method="post" target="_blank">

			<div class="Centralizador">
				<h2> Portal do SMS</h2>
				<br />
				<br />
				<input type="hidden" name="app" value="page" />
				<input type="hidden" name="inc" value="login" />
				<input type="hidden" name="op" value="auth_login" />

				<label for="username" >Usuário:</label>
				<br />
				<input type="text" size="30" name="username" id="username" class="medium" title="Por favor informe seu login." x-moz-errormessage="Por favor informe seu login">
				<br />
				<label for="password">Senha:</label>
				<br />
				<input type="password" size="30" name="password" id="password" class="medium" title="Por favor informe sua senha." x-moz-errormessage="Por favor informe sua senha">
				<br />
				<input type="submit" value="Acessar o Portal do SMS" class="BotaoVerdeEscuro" type="button" alt="Acessar o Portal do SMS" title="Acessar o Portal do SMS">

			</div>		

		</form>

	</div>

</div>
<!-- PORTAL DO SMS -->

<!-- Cadastro de Clientes SMS Legal -->
<div style='display:none'>
	<div id='Cadastro' style='padding:10px; background:#fff;'>
		<div class="Centralizador">
			<h2>Cadastro SMS Legal</h2>
			<br />
			<br />
			<form method="post" action="Acao.php" target="CadastroCliente">
				<input type="text" name="LOGIN" title="Por favor informe seu endereço de email cadastrado na Central do Cliente" x-moz-errormessage="Por favor informe seu endereço de email cadastrado na Central do Cliente" placeholder="Digite login ou email" />
				<br />
				<input type="password" name="SENHA" title="Por favor informe sua senha da Central do Cliente" x-moz-errormessage="Por favor informe sua senha da Central do Cliente" placeholder="Digite sua senha" />
				<br />
				<input type="submit" value="Realizar Cadastro" class="BotaoVerdeEscuro" type="button" alt="Realizar Cadastro" title="Realizar Cadastro">
			</form>
		</div>

	</div>

</div>

<!-- CENTRAL DO CLIENTE  -->