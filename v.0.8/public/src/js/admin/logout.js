
//  logout
function processFormLogout(event) {
  event.preventDefault();
  var inputs = $('#formLogout').serializeFormJSON();
  inputs.accion = 'logout';

  var params = JSON.stringify(inputs);
  console.log(params);

  $.ajax({
    url: './app/api/user/IndexLogin.php',
    dataType: 'json',
    type: 'post',
    contentType: 'application/json',
    data: params,
    processData: false,
    success: function (data, textStatus, jQxhr) {


      if (!data.error) {
        setTimeout(function(){ window.location.href = "admin/login.php"; }, 1000);

      }
      else {
        alert('Sucedio un error al enviar mensaje: ' + data.msg);
      }
    },
    error: function (jqXhr, textStatus, errorThrown) {
      console.log(errorThrown);
    }
  });

}
// $('#formLogout').submit(processFormLogout);

$("#logout").on( "click", function(event) {
  event.preventDefault();
  processFormLogout(event);
});

// function salir(event){
//   processFormLogout(event);
// }
