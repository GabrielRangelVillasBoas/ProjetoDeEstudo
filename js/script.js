// MASCARA TELEFONE

$(document).ready(function(){
    $("#comment").mask("(00) 00000-0000")
    
})


// REQUISIÇÃO POST AJAX

$('#formu').submit(function(e){
    e.preventDefault();
    var u_name = $('#name').val();
    var u_comment = $('#comment').val();
    var result = $(location).attr('href', 'http://projetinho.local/site.php')
    // console.log('#formu')
    var error = 0
    if(u_name == ''){
        alert('favor inserir os dados')
        return;
    }
    if(u_comment == ''){
        alert('favor inserir os dados')
        return;
    }
    $.ajax({
        url: 'http://projetinho.local/inserir.php',
        type: 'POST',   
        data: {name: u_name, comment: u_comment},
        success: function(result){
            result;
        }
    })
})





