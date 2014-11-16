//Jquery DataPicker
$(document).ready(function() {
	$(".data").datepicker({
		dateFormat : 'dd/mm/yy',
		dayNames : ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado', 'Domingo'],
		dayNamesMin : ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
		dayNamesShort : ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
		monthNames : ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
		monthNamesShort : ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
		nextText : 'Próximo',
		prevText : 'Anterior'
	});
});

// ACCORDION JQUERY

$(function() {
	$("#accordion").accordion({
		collapsible : true
	});
});

//TABS JQUERY

$(function() {
	$("#tabs").tabs({
		collapsible : true
	});
});

//TOOLTIPS FORM JQUERY

$(function() {
	var tooltips = $("[title]").tooltip();

});

/*JANELA MODAL DE AVISO INICIAL*/

function open_modal(id) {
	var maskHeight = $(document).height();
	var maskWidth = $(window).width();

	$('#mask').css({
		'width' : maskWidth,
		'height' : maskHeight
	});

	//efeito de transição
	$('#mask').fadeIn(1000);
	$('#mask').fadeTo("slow", 0.8);

	//Define largura e altura do div#mask iguais ás dimensões da
	// tela
	$('#mask').css({
		'width' : maskWidth,
		'height' : maskHeight
	});

	///armazena a largura e a altura da janela
	var winH = $(window).height();
	var winW = $(window).width();
	//centraliza na tela a janela popup
	$(id).css('top', winH / 2 - $(id).height() / 2);
	$(id).css('left', winW / 2 - $(id).width() / 2);

	//efeito de transição

	$(id).fadeIn(2000);
};

$(document).ready(function() {

	$('a[name=modal]').click(function(e) {
		e.preventDefault();
		open_modal($(this).attr('href'));
	});

	open_modal('#ModalAvisos');
	//abrindo o div#ModalAvisos ao carregar a página

	$('.window .close').click(function(e) {
		e.preventDefault();

		$('#mask').hide();
		$('.window').hide();
	});

	$('#mask').click(function() {
		$(this).hide();
		$('.window').hide();
	});
	//setTimeout("$('#mask, .window').hide();",45000); //fecha
	// após 45 segundos
});

/*JANELA MODAL DE AVISO INICIAL*/

/* script COLORBOX */
$(document).ready(function() {
	//Examples of how to assign the Colorbox event to elements
	$(".group1").colorbox({
		rel : 'group1'
	});
	$(".group2").colorbox({
		rel : 'group2',
		transition : "fade"
	});
	$(".group3").colorbox({
		rel : 'group3',
		transition : "none",
		width : "75%",
		height : "75%"
	});
	$(".group4").colorbox({
		rel : 'group4',
		slideshow : true
	});
	$(".ajax").colorbox();
	$(".youtube").colorbox({
		iframe : true,
		innerWidth : 800,
		innerHeight : 600
	});
	$(".vimeo").colorbox({
		iframe : true,
		innerWidth : 800,
		innerHeight : 600
	});
	$(".iframe").colorbox({
		iframe : true,
		width : "80%",
		height : "80%"
	});
	$(".inline").colorbox({
		inline : true,
		width : "80%"
	});
	$(".Cadastro").colorbox({
		inline : true,
		width : "50%"
	});
	$(".PortaldoSMS").colorbox({
		inline : true,
		width : "50%"
	});
	$(".Contato").colorbox({
		inline : true,
		width : "40%"
	});
	$(".Dominios").colorbox({
		inline : true,
		width : "50%"
	});
	$(".Newsletters").colorbox({
		iframe : true,
		width : "65%",
		height : "95%"
	});
	$(".callbacks").colorbox({
		onOpen : function() {
			alert('onOpen: colorbox is about to open');
		},
		onLoad : function() {
			alert('onLoad: colorbox has started to load the targeted content');
		},
		onComplete : function() {
			alert('onComplete: colorbox has displayed the loaded content');
		},
		onCleanup : function() {
			alert('onCleanup: colorbox has begun the close process');
		},
		onClosed : function() {
			alert('onClosed: colorbox has completely closed');
		}
	});

	//Example of preserving a JavaScript event for inline calls.
	$("#click").click(function() {
		$('#click').css({
			"background-color" : "#f00",
			"color" : "#fff",
			"cursor" : "inherit"
		}).text("Open this window again and this message will still be here.");
		return false;
	});
});

// JANELA MODAL COLOR BOX FACEBOOK
jQuery(document).ready(function() {
	if (document.cookie.indexOf('visited=true') == -1) {
		var fifteenDays = 1000 * 60 * 60 * 24 * 30;
		var expires = new Date((new Date()).valueOf() + fifteenDays);
		document.cookie = "visited=true;expires=" + expires.toUTCString();
		$.colorbox({
			width : "600px",
			inline : true,
			href : "#subscribe"
		});
	}
});

/* script COLORBOX */

//LIMPAR DADOS DO PLACEHOLDER ANTES DE DAR SUBMIT NO FORM

$(function()
{
	$('[placeholder]').parents('form').bind('submit', function(e)
	{
		var $form = $(e.target);
		if (!!$form.data('binded') == false)
		{
			$(e.target).find('[placeholder]').each(function(i, el)
			{
				if (el.val() == el.attr('placeholder'))
				{
					el.val('');
				}
			});
			$form.data('binded', true);
		}
	});
});
