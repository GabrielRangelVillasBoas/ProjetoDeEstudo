$(function() {
  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
  };
  $('.telefone').mask(SPMaskBehavior, spOptions);
})
function checkTelefone(telefone){
    var result = telefone.indexOf("(55)") > -1;
    if(result == true)
      return false;
    if (telefone.length < 14)
    return false;
    console.log(telefone);
   //var regex = new RegExp('^\\(((1[1-9])|([2-9][0-9]))\\)((3[0-9]{3}-[0-9]{4})|(9[0-9]{3}-[0-9]{5}))$');
   if (telefone == "(12) 3456-7890" ||
   telefone == "(00) 0000-00000" ||
   telefone == "(00) 0000-0000" ||
   telefone == "(11) 1111-11111" ||
   telefone == "(11) 1111-1111" ||
   telefone == "(22) 2222-22222" ||
   telefone == "(22) 2222-2222" ||
   telefone == "(33) 3333-33333" ||
   telefone == "(33) 3333-3333" ||
   telefone == "(44) 4444-44444" ||
   telefone == "(44) 4444-4444" ||
   telefone == "(55) 5555-55555" ||
   telefone == "(55) 5555-5555" ||
   telefone == "(66) 6666-66666" ||
   telefone == "(66) 6666-6666" ||
   telefone == "(77) 7777-77777" ||
   telefone == "(77) 7777-7777" ||
   telefone == "(88) 8888-88888" ||
   telefone == "(88) 8888-8888" ||
   telefone == "(99) 9999-9999" ||
   telefone == "(99) 9999-99999")
    return false;
      return true;
  }
function checkEmail(email){
  if (email == "teste@teste.com" ||
  email == "teste@teste.com.br" ||
  email == "teste@teste.ag")
  return false;
  if (email.indexOf("teste") != -1){
    return false;
  }
  var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
  if(typeof(email) == "string"){
    if(er.test(email)){ return true; }
  }else if(typeof(email) == "object"){
    if(er.test(email.value)){
      return true;
    }
  }else{
    return false;
  }
}



function validar() {
    var n = $('#formu .required').length;
    var errors=0;
    //var form = $(this);
     $('#formu .required').each(function(i) {
      if ($(this).val() == '') {
        errors++;
        if (errors == 1) {
          $(this).focus();
        }
        $(this).addClass('error-form');
        $(this).removeClass('valide-form');
        $(this).next('.error-field').show();
      }else{
        $(this).removeClass('error-form');
        $(this).addClass('valide-form');
        // $(this).next('.error-field').hide();
        
      }
     });
    //  var email = $('#emailid').val();
    //     if(checkEmail(email) != true){
    //  var email = $('#emailid').val();
    //       $('#emailid').addClass('error-form').html("Preencha os campos");
    //       $('#emailid').removeClass('valide-form');
    //       $(".email-text").fadeIn();
    //       errors++;
    //     }else{
    //       $('#emailid').removeClass('error-form');
    //       $('#emailid').addClass('valide-form');
    //       $(".email-text").fadeOut();
    //     }
    //   var telefone = $('.telefone').val();
    //       if(checkTelefone(telefone) != true){
    //         $('.telefone').addClass('error-form');
    //         $('.telefone').removeClass('valide-form');
    //         $('.telefone').next('.error-field').show();
    //         errors++;
    //       }else{
    //         $('.telefone').removeClass('error-form');
    //         $('.telefone').addClass('valide-form');
    //         $('.telefone').next('.error-field').hide();
    //       }
     if (errors == 0) {
        var dados = $('#formu').serialize();
        var result = $(location).attr('href', 'http://www.google.com.br')
       
        // console.log(dados);
        $('#bt_enviar').attr('disabled', true);
          $.ajax({
          type: 'POST',
          data: dados,
          url:'http://bkp-code-newton.local/testes/form/inserir.php',
            success: function(result){
              result
              
          // $('#formu input').val();
          // $('textarea').val();
          // $('#formu').removeClass('valide-form');
            }
        });
      }
    }
    