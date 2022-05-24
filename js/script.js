// MASCARA TELEFONE

$(document).ready(function(){
    $("#telefone").mask("(00) 00000-0000")
    
})


// REQUISIÇÃO POST AJAX

$('#formu').submit(function(e){
    e.preventDefault();
    var nome = $('#nome').val();
    var email = $('#email').val();
    var telefone = $('#telefone').val();
    var mensagem = $('#mensagem').val();
    
    var error = 0
    if(nome == ''){
        alert('favor inserir os dados')
        return;
    }
    if(email == ''){
        alert('favor inserir os dados')
        return;
    }
    $.ajax({
        url: 'http://localhost/inserir.php',
        type: 'POST',   
        data: {nome: nome, email: email, telefone: telefone, mensagem: mensagem},
        success: function(result){
            result;
        }
    })
})





