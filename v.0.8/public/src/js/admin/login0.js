
//  login
function processForLogin(event) {
  event.preventDefault();
  var inputs = $('#formLogin').serializeFormJSON();
  inputs.accion = 'login';

  var params = JSON.stringify(inputs);
  // console.log(params);

  $.ajax({
    url: './api/ajax/user/IndexLogin.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: params,
    processData: false,
    success: function (data, textStatus, jQxhr) {


      console.log(data);
      // console.log(textStatus);
      // console.log(jQxhr);
      if (!data.error && data.data['login']) {
        $('#alertMensaje').html(data.msg);
        $('#formLogin')[0].reset();
        setTimeout(function () { window.location.href = "admin/"; }, 1500);
      }
      else {
        $('#alertMensaje').html('Sucedio un error al enviar mensaje: ' + data.msg);
      }

      $('#alertConfirmPrincipal').addClass('show');
      $("#alertConfirmPrincipal").css({ opacity: 1 });

      setTimeout(function () { $('#alertConfirmPrincipal').removeClass('show'); }, 5000);

    },
    error: function (jqXhr, textStatus, errorThrown) {
      console.log(errorThrown);
    }
  });

}
$('#formLogin').submit(processForLogin);