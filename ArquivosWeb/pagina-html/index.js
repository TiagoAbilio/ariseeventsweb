$(document).ready(function VerificaSenha(){
	$("form").submit(function(){
		if ($("#senha").val() === "" && $("#nome").val() === "") {
			alert("Informe Nome e Senha antes de prosseguir.")
		}
		else if ($("#nome").val() === ""){
			alert("Informe o Nome.");
		}
		else if ($("#senha").val() === "") {
			alert("Informe a Senha.");
		}
		});

});