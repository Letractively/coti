

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

//Função que verifica se as senhas passadas são iguais
function comprovaSenha() {
    senha1 = document.f_usuario.cadu_pass.value
    senha2 = document.f_usuario.cadu_confpass.value

    if(!senha1 == senha2)
        //        alert("As senhas conferem.")
        //    else
        alert("As senhas não conferem\nTente novamente.")
}

function vazio(){
    if(document.f_usuario.cadu_nome.value=="" || document.f_usuario.cadu_nome.value.length < 8)
    {
        alert( "Preencha campo NOME corretamente!" );
        document.dados.tx_nome.focus();
        return false;
    }
}

//Função que checa se o campo passado está vazio
function checaVazios(elemento, nome) {
    valor = document.forms.f_usuario.cadu_nome.value;
    nome = document.forms.f_usuario.cadu_nome.name;
    
    if (valor.length < 1) {
        alert("O campo " + nome + " não pode ser vazio!");
        valor.focus();
        valor.select();
        return false;
    } else
        return true;
}


// Função que valida número de telefone
function ValidaTelefone(tel){
    exp = /\(\d{2}\)\ \d{4}\-\d{4}/
    if(!exp.test(tel.value))
        alert('Número de Telefone Inválido!');
}

//adiciona mascara ao telefone
function MascaraTelefone(tel){  
    if(mascaraInteiro(tel)==false){
        event.returnValue = false;
    }       
    return formataCampo(tel, '(00) 0000-0000', event);
}

//valida numero inteiro com mascara
function mascaraInteiro(){
    if (event.keyCode < 48 || event.keyCode > 57){
        event.returnValue = false;
        return false;
    }
    return true;
}

//formata de forma generica os campos
function formataCampo(campo, Mascara, evento) { 
    var boleanoMascara; 
        
    var Digitato = evento.keyCode;
    exp = /\-|\.|\/|\(|\)| /g
    campoSoNumeros = campo.value.toString().replace( exp, "" ); 
   
    var posicaoCampo = 0;    
    var NovoValorCampo="";
    var TamanhoMascara = campoSoNumeros.length;
    ; 
        
    if (Digitato != 8) { // backspace 
        for(i=0; i<= TamanhoMascara; i++) { 
            boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                || (Mascara.charAt(i) == "/")) 
            boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
            if (boleanoMascara) { 
                NovoValorCampo += Mascara.charAt(i); 
                TamanhoMascara++;
            }else { 
                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                posicaoCampo++; 
            }              
        }      
        campo.value = NovoValorCampo;
        return true; 
    }else { 
        return true; 
    }
}

//Função que valida os email

function validateForm()
{
    var x = document.forms.f_usuario.cadu_email.value
    var atpos=x.indexOf("@");
    var dotpos=x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    {
        alert("Não é um endereço de e-mail válido.");
        return false;
    }
}

function validaEmail() {
    
    var email = document.forms.f_usuario.cadu_email.value;
    erro = new String;
    var chars = "@#$&[]()/\\\{}!^:'\"";
    var pat=/^(.+)@(.+)$/;

    var emaildiv = email.match(pat);

    if(emaildiv==null){
        alert(erro += "Não é um endereço de email válido.\n\n");
        return false;
    }
    var login = emaildiv[1];
    var dominio = emaildiv[2];

    for(var i=0;i<chars.length;i++) {
        if(login.indexOf(chars.substr(i,1))!=-1){
            alert(erro += "Não é um endereço de email válido.\n\n");
            return false;
        }
    }

    for(var i=0;i<chars.length;i++) {
        if(dominio.indexOf(chars.substr(i,1))!=-1){
            alert(erro += "Não é um endereço de email válido.\n\n");
            return false;
        }
    }
    return true;
}

//telefone 
function mascara_telefone() {
    if(document.forms.f_usuario.cadu_tel.value.length == 0) {
        document.forms.f_usuario.cadu_tel.value += '(';
    }
    if(document.forms.f_usuario.cadu_tel.value.length == 3) {
        document.forms.f_usuario.cadu_tel.value += ')';
    }
    if(document.forms.f_usuario.cadu_tel.value.length == 4) {
        document.forms.f_usuario.cadu_tel.value += ' ';
    }
    if(document.forms.f_usuario.cadu_tel.value.length == 9) {
        document.forms.f_usuario.cadu_tel.value += '-';
    }
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
    cpf = document.forms.f_usuario.cadu_cpf.value;
    erro = new String;
    if (cpf.length < 11) erro += "São necessários 11 dígitos para verificação do CPF! \n\n";
    var nonNumbers = /\D/;
    if (nonNumbers.test(cpf)) erro += "A verificação de CPF suporta apenas números! \n\n";
    if (cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999"){
        erro += "Número de CPF inválido!"
    }
    var a = [];
    var b = new Number;
    var c = 11;
    for (i=0; i<11; i++){
        a[i] = cpf.charAt(i);
        if (i < 9) b += (a[i] * --c);
    }
    if ((x = b % 11) < 2) {
        a[9] = 0
    } else {
        a[9] = 11-x
    }
    b = 0;
    c = 11;
    for (y=0; y<10; y++) b += (a[y] * c--);
    if ((x = b % 11) < 2) {
        a[10] = 0;
    } else {
        a[10] = 11-x;
    }
    if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10])){
        erro +="Dígito verificador com problema!";
    }
    if (erro.length > 0){
        alert(erro);
        return false;
    }
    return true;
}