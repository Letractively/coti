/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function DesabilitaUser() {
    document.f_usuario.cadu_siape.blur();
    document.f_usuario.cadu_cpf.blur();
    document.f_usuario.cadu_nome.blur();
    document.f_usuario.cadu_email.blur();
    document.f_usuario.cadu_tel.blur();
    document.f_usuario.cadu_cat.blur();
    document.f_usuario.cadu_setor.blur();
    document.f_usuario.cadu_cargo.blur();
    document.f_usuario.cadu_pass.blur();
    document.f_usuario.cadu_confpass.blur();
}

function HabilitaUser() {
    document.f_usuario.cadu_siape.focus();
    
//document.f_usuario.cadu_siape.disable = false;
}


//Início script que verifica se a senha contém valores numéricos, e letras maiusculas e minusculas //
var numeros="0123456789";
var letras="abcdefghyjklmnopqrstuvwxyz";
var letras_maiusculas="ABCDEFGHYJKLMNOPQRSTUVWXYZ";

function tem_numeros(texto){
    for(i=0; i<texto.length; i++){
        if (numeros.indexOf(texto.charAt(i),0)!=-1){
            return 1;
        }
    }
    return 0;
}

function tem_letras(texto){
    texto = texto.toLowerCase();
    for(i=0; i<texto.length; i++){
        if (letras.indexOf(texto.charAt(i),0)!=-1){
            return 1;
        }
    }
    return 0;
}

function tem_minusculas(texto){
    for(i=0; i<texto.length; i++){
        if (letras.indexOf(texto.charAt(i),0)!=-1){
            return 1;
        }
    }
    return 0;
}

function tem_maiusculas(texto){
    for(i=0; i<texto.length; i++){
        if (letras_maiusculas.indexOf(texto.charAt(i),0)!=-1){
            return 1;
        }
    }
    return 0;
}

function seguranca_chave(chave){
    var seguranca = 0;
    if (chave.length!=0){
        if (tem_numeros(chave) && tem_letras(chave)){
            seguranca += 30;
        }
        if (tem_minusculas(chave) && tem_maiusculas(chave)){
            seguranca += 30;
        }
        if (chave.length >= 4 && chave.length <= 5){
            seguranca += 10;
        }else{
            if (chave.length >= 6 && chave.length <= 8){
                seguranca += 30;
            }else{
                if (chave.length > 8){
                    seguranca += 40;
                }
            }
        }
    }
    return seguranca
}

function mostra_seguranca_chave(chave,formulario){
    segurancao = seguranca_chave(chave);
    formulario.seguranca.value = segurancao + "%";
}
//Fim script que verifica se a senha contém valores numéricos, e letras maiusculas e minusculas //

//Inicio tentativa de função q exibe imagem no lugar da porcentagem da segurança //
function mostra_seguranca_chave_img(chave,formulario){
    imgpercent1 = new Image();
    imgpercent2 = new Image();
    imgpercent3 = new Image();
    imgpercent4 = new Image();
    imgpercent5 = new Image();
    imgpercent1.src = "/images/porcent/porcent1.gif";


    segurancao = seguranca_chave(chave);
    if (segurancao == 0){
        formulario.seguranca.value = document.getElementById("seguranca").src = imgpercent1.src;//"porcent0.gif";
    }
    if (segurancao > 0 && segurancao <= 10){
        formulario.seguranca.value = document.getElementById("seguranca").src = "porcent0.gif"//images/porcent/porcent1.gif";

    }
    if (segurancao > 40 && segurancao <= 60){

    }
    formulario.seguranca.value=segurancao + "%";
}
//FIM tentativa de função q exibe imagem no lugar da porcentagem da segurança //

//Função que verifica se as senhas passadas são iguais
function comprovaSenha() {
    senha1 = document.f_usuario.cadu_pass.value
    senha2 = document.f_usuario.cadu_confpass.value

    if(senha1 == senha2)
        alert("As senhas conferem.")
    else
        alert("As senhas não conferem\nTente novamente.")
}

//Função que checa se o campo passado está vazio
function checaVazios(elemento, nome) {
    if (elemento.value.length < 1) {
        alert("O campo " + nome + " não pode ser vazio!");
        elemento.focus();
        elemento.select();
        return false;
    } else
        return true;
}

//Função que valida os email
//function checaEmail(elemento) {
//    if (elemento.value.lastIndexOf("@") == -1) {
//        alert("Formato ilegal para E-mail");
//        elemento.focus();
//        elemento.select();
//        return false;
//    } else
//        return true;
//}
function valida_email(email) {
		var chars = "@#$&[]()/\\\{}!^:'\"";
		var pat=/^(.+)@(.+)$/;
		
		var emaildiv = email.match(pat);
		
		if(emaildiv==null)
			return false;
			
		var login = emaildiv[1];
		var dominio = emaildiv[2];
		
		for(var i=0;i<chars.length;i++) {
			if(login.indexOf(chars.substr(i,1))!=-1)
				return false;
		}
		
		for(var i=0;i<chars.length;i++) {
			if(dominio.indexOf(chars.substr(i,1))!=-1)
				return false;
		}
		
		return true;
	}
//Função que acrescenta TextField
var input = 1;

function addTextField(campo) {
    input++;
    document.getElementById("campof").innerHTML+="<tr><td>"+input+"</td><td>"+" <input type='text' name='"+campo+"' value=''></td></tr>";
    document.form.campo.value="";
    
}

//Função que valida o cpf
   function validaCPF() 
   {
         cpf = document.f_usuario.cadu_cpf.value;
         erro = new String;
         if (cpf.length < 11) erro += "Sao necessarios 11 digitos para verificacao do CPF! \n\n";
         var nonNumbers = /\D/;
         if (nonNumbers.test(cpf)) erro += "A verificacao de CPF suporta apenas numeros! \n\n";
         if (cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999"){
                 erro += "Numero de CPF invalido!"
        }
        var a = [];
        var b = new Number;
        var c = 11;
        for (i=0; i<11; i++){
               a[i] = cpf.charAt(i);
               if (i < 9) b += (a[i] * --c);
        }
        if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
        b = 0;
        c = 11;
        for (y=0; y<10; y++) b += (a[y] * c--);
        if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
        if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10])){
               erro +="Digito verificador com problema!";
        }
        if (erro.length > 0){
               alert(erro);
               return false;
        }
        return true;
   }