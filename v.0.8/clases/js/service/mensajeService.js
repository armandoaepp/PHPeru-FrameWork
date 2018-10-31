
// Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
'use strinct';
app.service('mensajeService', function($http){
    this.getMensajes = function()
    {
        var url_    = 'data/ajax/mensaje/indexMensaje.php';
        var params_   = {'params': {'accion': 'list'}};
        
        return $http.get(url_,  params_);
    };

    this.setMensaje = function(params_)
    {
        var url_    = 'data/ajax/mensaje/indexMensaje.php';
        params_.accion = 'set';
       
        return $http.post(url_, params_ );
    };

    this.getMensajeById = function(params_)
    {
        var url_    = 'data/ajax/mensaje/indexMensaje.php';
        var params_   = {'params': {'accion': 'list', 'id': id}};

        return $http.get(url_, params_);
    };

    this.updMensaje = function(params_)
    {
        var url_    = 'data/ajax/mensaje/indexMensaje.php';
        params_.accion = 'upd';
       
        return $http.post(url_, params_ );
    };

});
