
//  login
function processForLogin(event) {
  event.preventDefault();
  var inputs = $('#formLogin').serializeFormJSON();
  inputs.accion = 'login';

  var params = JSON.stringify(inputs);
  // console.log(params);

   axios.post('app/api/user/IndexLogin.php', params)
    .then(function (response) {
      // console.log(response);
      var data = response.data ;

      // console.log(data);

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

    })
    .catch(function (error) {
      console.log(error);
    });

}
$('#formLogin').submit(processForLogin);