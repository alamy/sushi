
var tksalmao = document.getElementById('tksalmao');
var tkcamarao = document.getElementById('tkcamarao');
var tkKani = document.getElementById('tkKani');
var tkSalmaoKani = document.getElementById('tkSalmaoKani');
var tkFiladelfia = document.getElementById('tkFiladelfia');
var tkHotFiladelfia = document.getElementById('tkHotFiladelfia');
var tkEbiKani = document.getElementById('tkEbiKani');
var tkEbiSalmaoMaki = document.getElementById('tkEbiSalmaoMaki');
var filadelfia = document.getElementById('filadelfia');
var uramaki = document.getElementById('uramaki');
var ebimaki = document.getElementById('ebimaki');
var nigiri = document.getElementById('nigiri');
var carioca1 = document.getElementById('carioca1');
var carioca2 = document.getElementById('carioca2');
var carioca3 = document.getElementById('carioca3');
var sunomono1 = document.getElementById('sunomono1');
var sunomono2 = document.getElementById('sunomono2');
var cocalata = document.getElementById('cocalata');
var coca500 = document.getElementById('coca500');



function pedir() {
	

		if (tksalmao) {
		tksalmaoValor = tksalmao.value * 15.90;
		document.getElementById("quantidadeTk1").innerHTML = tksalmao.value;
		document.getElementById("ValorTk1").innerHTML = tksalmaoValor;
		if (tksalmaoValor) {
			$("#tk1").addClass("aparecer");
		}
		

		}
		if (tkcamarao) {
		tkcamaraoValor = tkcamarao.value * 15.90;
		document.getElementById("quantidadeTk2").innerHTML = tkcamarao.value;
		document.getElementById("ValorTk2").innerHTML = tkcamaraoValor;
		if (tkcamaraoValor) {
			$("#tk2").addClass("aparecer");
		}
		
		}	
		if (tkKani) {
		tkKaniValor = tkKani.value * 15.90;
		document.getElementById("quantidadeTk3").innerHTML = tkKani.value;
		document.getElementById("ValorTk3").innerHTML = tkKaniValor;
		if (tkKaniValor) {
			$("#tk3").addClass("aparecer");
		}
		

		}
		if (tkSalmaoKani) {
		tkSalmaoKaniValor = tkSalmaoKani.value * 15.90;
		document.getElementById("quantidadeTk4").innerHTML = tkSalmaoKani.value;
		document.getElementById("ValorTk4").innerHTML = tkSalmaoKaniValor;
		if (tksalmaoValor) {
			$("#tk4").addClass("aparecer");
		}
		

		}
		if (tkFiladelfia) {
		tkFiladelfiaValor = tkFiladelfia.value * 15.90;
		document.getElementById("quantidadeTk5").innerHTML = tkFiladelfia.value;
		document.getElementById("ValorTk5").innerHTML = tkFiladelfiaValor;
		if (tkFiladelfiaValor) {
			$("#tk5").addClass("aparecer");
		}
		

		}		
		if (tkHotFiladelfia) {
		tkHotFiladelfiaValor = tkHotFiladelfia.value * 15.90;
		document.getElementById("quantidadeTk6").innerHTML = tkHotFiladelfia.value;
		document.getElementById("ValorTk6").innerHTML = tkHotFiladelfiaValor;
		if (tksalmaoValor) {
			$("#tk6").addClass("aparecer");
		}
		

		}

		if (tkEbiKani) {
		tkEbiKaniValor = tkEbiKani.value * 16.90;
		document.getElementById("quantidadeTk7").innerHTML = tkEbiKani.value;
		document.getElementById("ValorTk7").innerHTML = tkEbiKaniValor;
		if (tkEbiKaniValor) {
			$("#tk7").addClass("aparecer");
		}
		
		}		
		if (tkEbiSalmaoMaki) {
		tkEbiSalmaoMakiValor = tkEbiSalmaoMaki.value * 18.90;
		document.getElementById("quantidadeTk8").innerHTML = tkEbiSalmaoMaki.value;
		document.getElementById("ValorTk8").innerHTML = tkEbiSalmaoMakiValor;
		if (tkEbiSalmaoMakiValor) {
			$("#tk8").addClass("aparecer");
		}
		

		}	

		if (filadelfia) {
		filadelfiaValor = filadelfia.value * 18.90;
		document.getElementById("quantidadeTk9").innerHTML = filadelfia.value;
		document.getElementById("ValorTk9").innerHTML = filadelfiaValor;
		if (filadelfiaValor) {
			$("#tk9").addClass("aparecer");
		}
		

		}

		if (uramaki) {
		uramakiValor = uramaki.value * 18.90;
		document.getElementById("quantidadeTk10").innerHTML = uramaki.value;
		document.getElementById("ValorTk10").innerHTML = uramakiValor;
		if (uramakiValor) {
			$("#tk10").addClass("aparecer");
		}
		

		}					

		if (ebimaki) {
		ebimakiValor = ebimaki.value * 18.90;
		document.getElementById("quantidadeTk11").innerHTML = ebimaki.value;
		document.getElementById("ValorTk11").innerHTML = ebimakiValor;
		if (ebimakiValor) {
			$("#tk11").addClass("aparecer");
		}
		

		}
		if (nigiri) {
		nigiriValor = nigiri.value * 18.90;
		document.getElementById("quantidadeTk12").innerHTML = nigiri.value;
		document.getElementById("ValorTk12").innerHTML = nigiriValor;
		if (nigiriValor) {
			$("#tk12").addClass("aparecer");
		}
		

		}	

		if (carioca1) {
		carioca1Valor = carioca1.value * 18.90;
		document.getElementById("quantidadeTk12").innerHTML = carioca1.value;
		document.getElementById("ValorTk12").innerHTML = carioca1Valor;
		if (carioca1Valor) {
			$("#tk12").addClass("aparecer");
		}
		

		}		

		if (carioca2) {
		carioca2Valor = carioca2.value * 18.90;
		document.getElementById("quantidadeTk13").innerHTML = carioca2.value;
		document.getElementById("ValorTk13").innerHTML = carioca2Valor;
		if (carioca2Valor) {
			$("#tk13").addClass("aparecer");
		}
		

		}

		if (carioca3) {
		carioca3Valor = carioca3.value * 18.90;
		document.getElementById("quantidadeTk14").innerHTML = carioca3.value;
		document.getElementById("ValorTk14").innerHTML = carioca3Valor;
		if (carioca3Valor) {
			$("#tk14").addClass("aparecer");
		}
		

		}

		if (sunomono1) {
		sunomono1Valor = sunomono1.value * 18.90;
		document.getElementById("quantidadeTk15").innerHTML = sunomono1.value;
		document.getElementById("ValorTk15").innerHTML = sunomono1Valor;
		if (sunomono1Valor) {
			$("#tk15").addClass("aparecer");
		}
		

		}
		if (sunomono2) {
		sunomono2Valor = sunomono2.value * 18.90;
		document.getElementById("quantidadeTk16").innerHTML = sunomono2.value;
		document.getElementById("ValorTk16").innerHTML = sunomono2Valor;
		if (sunomono1Valor) {
			$("#tk16").addClass("aparecer");
		}
		

		}
		if (bebidas) {
		bebidasValor = bebidas.value * 18.90;
		document.getElementById("quantidadeTk17").innerHTML = bebidas.value;
		document.getElementById("ValorTk17").innerHTML = sunomono2Valor;
		if (sunomono1Valor) {
			$("#tk17").addClass("aparecer");
		}
		

		}
		if (cocalata) {
		cocalataValor = cocalata.value * 18.90;
		document.getElementById("quantidadeTk18").innerHTML = cocalata.value;
		document.getElementById("ValorTk18").innerHTML = cocalataValor;
		if (cocalataValor) {
			$("#tk18").addClass("aparecer");
		}
		

		}
		if (coca500) {
		coca500Valor = coca500.value * 18.90;
		document.getElementById("quantidadeTk19").innerHTML = coca500.value;
		document.getElementById("ValorTk19").innerHTML = coca500Valor;
		if (cocalataValor) {
			$("#tk19").addClass("aparecer");
		}
		

		}							
  
}